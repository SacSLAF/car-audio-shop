<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceBookingResource\Pages;
use App\Models\ServiceBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class ServiceBookingResource extends Resource
{
    protected static ?string $model = ServiceBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Service Management';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Customer Information')
                    ->schema([
                        Forms\Components\TextInput::make('customer_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->required()
                            ->maxLength(20),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Vehicle Details')
                    ->schema([
                        Forms\Components\Select::make('vehicle_type')
                            ->options([
                                'Toyota' => 'Toyota',
                                'Daihatsu' => 'Daihatsu',
                                'Micro' => 'Micro',
                                'Suzuki' => 'Suzuki',
                                'Honda' => 'Honda',
                                'Nissan' => 'Nissan',
                                'Mitsubishi' => 'Mitsubishi',
                                'BMW' => 'BMW',
                                'Mercedes' => 'Mercedes',
                                'Audi' => 'Audi',
                                'Other' => 'Other',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('vehicle_model')
                            ->maxLength(100),
                        Forms\Components\Select::make('vehicle_year')
                            ->options(array_combine(range(date('Y'), 2000), range(date('Y'), 2000)))
                            ->searchable(),
                    ])->columns(2),

                Forms\Components\Section::make('Service Details')
                    ->schema([
                        Forms\Components\CheckboxList::make('services')
                            ->options([
                                'Audio System Installation' => 'Audio System Installation',
                                'Amplifier Installation' => 'Amplifier Installation',
                                'System Tuning' => 'System Tuning',
                                'Fog Lights Installation' => 'Fog Lights Installation',
                                'LED Light Upgrades' => 'LED Light Upgrades',
                                'Door Visors Installation' => 'Door Visors Installation',
                                'Carpets & Floor Mats' => 'Carpets & Floor Mats',
                                'Rat Nets & Protection' => 'Rat Nets & Protection',
                                'Side Mirror Cameras' => 'Side Mirror Cameras',
                                '360° View Cameras' => '360° View Cameras',
                                'Reverse Camera Systems' => 'Reverse Camera Systems',
                                'Custom Installation' => 'Custom Installation',
                            ])
                            ->columns(2)
                            ->required(),
                        Forms\Components\Textarea::make('additional_notes')
                            ->rows(3),
                    ]),

                Forms\Components\Section::make('Preferred Schedule')
                    ->schema([
                        Forms\Components\TextInput::make('preferred_date')
                            ->maxLength(50),
                        Forms\Components\Select::make('preferred_time')
                            ->options([
                                'Morning (8-12)' => 'Morning (8-12)',
                                'Afternoon (12-4)' => 'Afternoon (12-4)',
                                'Evening (4-8)' => 'Evening (4-8)',
                            ]),
                    ])->columns(2),

                Forms\Components\Section::make('Admin Management')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'contacted' => 'Contacted',
                                'confirmed' => 'Confirmed',
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->required()
                            ->default('pending'),
                        Forms\Components\Textarea::make('admin_notes')
                            ->rows(3)
                            ->placeholder('Internal notes...'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->icon('heroicon-o-phone'),
                Tables\Columns\TextColumn::make('vehicle_type')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('vehicle_model')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('services')
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            return implode(', ', array_slice($state, 0, 3)) . (count($state) > 3 ? '...' : '');
                        }
                        return $state;
                    })
                    ->limit(30),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'contacted' => 'info',
                        'confirmed' => 'success',
                        'completed' => 'primary',
                        'cancelled' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Booked')
                    ->dateTime('M d, Y h:i A')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'contacted' => 'Contacted',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ]),
                Tables\Filters\SelectFilter::make('vehicle_type')
                    ->options([
                        'Toyota' => 'Toyota',
                        'Daihatsu' => 'Daihatsu',
                        'Micro' => 'Micro',
                        'Suzuki' => 'Suzuki',
                        'Honda' => 'Honda',
                        'Nissan' => 'Nissan',
                        'Other' => 'Other',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('contact')
                    ->label('Contact via WhatsApp')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->color('success')
                    ->url(function (ServiceBooking $record) {
                        $services = is_array($record->services) ? implode(', ', $record->services) : $record->services;
                        $message = "🔧 Service Booking #{$record->id}\n\n" .
                                  "👤 Customer: {$record->customer_name}\n" .
                                  "📞 Phone: {$record->phone}\n" .
                                  "🚗 Vehicle: {$record->vehicle_type} {$record->vehicle_model}\n" .
                                  "🛠️ Services: {$services}\n" .
                                  "📆 Date: {$record->preferred_date}\n" .
                                  "⏰ Time: {$record->preferred_time}\n\n" .
                                  "Please confirm this booking.";
                        
                        // Replace with your admin WhatsApp number
                        $adminPhone = '94771234567';
                        return "https://wa.me/{$adminPhone}?text=" . urlencode($message);
                    })
                    ->openUrlInNewTab()
                    ->visible(fn (ServiceBooking $record): bool => $record->status !== 'cancelled'),
                Tables\Actions\Action::make('markContacted')
                    ->label('Mark Contacted')
                    ->icon('heroicon-o-check-circle')
                    ->color('info')
                    ->action(function (ServiceBooking $record) {
                        $record->update(['status' => 'contacted']);
                        Notification::make()
                            ->title('Marked as contacted')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (ServiceBooking $record): bool => $record->status === 'pending'),
                Tables\Actions\Action::make('markConfirmed')
                    ->label('Confirm')
                    ->icon('heroicon-o-check-badge')
                    ->color('success')
                    ->action(function (ServiceBooking $record) {
                        $record->update(['status' => 'confirmed']);
                        Notification::make()
                            ->title('Booking confirmed')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (ServiceBooking $record): bool => $record->status === 'contacted'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('markContacted')
                        ->label('Mark as Contacted')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($records) => $records->each->update(['status' => 'contacted']))
                        ->deselectRecordsAfterCompletion()
                        ->successNotificationTitle('Bookings marked as contacted'),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceBookings::route('/'),
            'create' => Pages\CreateServiceBooking::route('/create'),
            'view' => Pages\ViewServiceBooking::route('/{record}'),
            'edit' => Pages\EditServiceBooking::route('/{record}/edit'),
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