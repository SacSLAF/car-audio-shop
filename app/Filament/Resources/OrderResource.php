<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationGroup = 'Shop Management';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Order Information')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Customer')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('order_number')
                            ->required()
                            ->maxLength(255)
                            ->default('ORD-' . date('Ymd') . '-' . strtoupper(Str::random(6))),
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'processing' => 'Processing',
                                'shipped' => 'Shipped',
                                'delivered' => 'Delivered',
                                'cancelled' => 'Cancelled',
                            ])
                            ->required()
                            ->default('pending'),
                        Forms\Components\Select::make('payment_status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'failed' => 'Failed',
                            ])
                            ->required()
                            ->default('pending'),
                        Forms\Components\TextInput::make('payment_method')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Order Totals')
                    ->schema([
                        Forms\Components\TextInput::make('subtotal')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01),
                        Forms\Components\TextInput::make('tax')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->default(0),
                        Forms\Components\TextInput::make('shipping_cost')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->default(0),
                        Forms\Components\TextInput::make('discount')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->default(0),
                        Forms\Components\TextInput::make('total')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01),
                    ])->columns(2),

                Forms\Components\Section::make('Shipping Information')
                    ->schema([
                        Forms\Components\Textarea::make('shipping_address')
                            ->required()
                            ->rows(3),
                        Forms\Components\Textarea::make('billing_address')
                            ->rows(3),
                        Forms\Components\TextInput::make('shipping_method'),
                    ]),

                Forms\Components\Section::make('Additional')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->rows(3),
                        Forms\Components\DateTimePicker::make('shipped_at'),
                        Forms\Components\DateTimePicker::make('delivered_at'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Order #')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->label('Total')
                    ->money('USD')
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'processing' => 'info',
                        'shipped' => 'primary',
                        'delivered' => 'success',
                        'cancelled' => 'danger',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'paid' => 'success',
                        'failed' => 'danger',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Order Date')
                    ->dateTime('M d, Y h:i A')
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipped_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'processing' => 'Processing',
                        'shipped' => 'Shipped',
                        'delivered' => 'Delivered',
                        'cancelled' => 'Cancelled',
                    ]),
                Tables\Filters\SelectFilter::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                    ]),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('from'),
                        Forms\Components\DatePicker::make('to'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn ($q) => $q->whereDate('created_at', '>=', $data['from']))
                            ->when($data['to'], fn ($q) => $q->whereDate('created_at', '<=', $data['to']));
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('markAsProcessing')
                    ->label('Processing')
                    ->icon('heroicon-o-arrow-path')
                    ->color('info')
                    ->action(function (Order $record) {
                        $record->update(['status' => 'processing']);
                    })
                    ->visible(fn (Order $record): bool => $record->status === 'pending'),
                Tables\Actions\Action::make('markAsShipped')
                    ->label('Shipped')
                    ->icon('heroicon-o-truck')
                    ->color('primary')
                    ->action(function (Order $record) {
                        $record->update(['status' => 'shipped', 'shipped_at' => now()]);
                    })
                    ->visible(fn (Order $record): bool => $record->status === 'processing'),
                Tables\Actions\Action::make('markAsDelivered')
                    ->label('Delivered')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(function (Order $record) {
                        $record->update(['status' => 'delivered', 'delivered_at' => now()]);
                    })
                    ->visible(fn (Order $record): bool => $record->status === 'shipped'),
                Tables\Actions\Action::make('markAsCancelled')
                    ->label('Cancel')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->action(function (Order $record) {
                        $record->update(['status' => 'cancelled']);
                    })
                    ->visible(fn (Order $record): bool => !in_array($record->status, ['delivered', 'cancelled'])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            OrderResource\RelationManagers\OrderItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'pending')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
