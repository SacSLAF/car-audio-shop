<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = 'Shop Management';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('brand_id')
                            ->label('Brand')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('sku')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->default('SKU-' . strtoupper(Str::random(8))),
                    ])->columns(2),

                Forms\Components\Section::make('Description')
                    ->schema([
                        Forms\Components\Textarea::make('short_description')
                            ->maxLength(65535)
                            ->rows(2)
                            ->placeholder('Brief product description for listing pages'),
                        Forms\Components\RichEditor::make('description')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                                'heading',
                            ])
                            ->columnSpanFull()
                            ->placeholder('Detailed product description'),
                    ]),

                Forms\Components\Section::make('Pricing & Stock')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->minValue(0),
                        Forms\Components\TextInput::make('compare_price')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01)
                            ->minValue(0)
                            ->helperText('Original price for sale items (leave empty if no sale)'),
                        Forms\Components\TextInput::make('stock_quantity')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                        Forms\Components\Toggle::make('in_stock')
                            ->label('In Stock')
                            ->default(true)
                            ->helperText('Manually override stock status'),
                    ])->columns(2),

                Forms\Components\Section::make('Images')
                    ->schema([
                        Forms\Components\FileUpload::make('main_image')
                            ->image()
                            ->directory('products')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->helperText('Main product image (recommended size: 800x800)'),
                        Forms\Components\FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->directory('products/gallery')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->helperText('Additional product images (max 5)')
                            ->maxFiles(5),
                    ]),

                Forms\Components\Section::make('Specifications')
                    ->schema([
                        Forms\Components\KeyValue::make('specifications')
                            ->label('Technical Specifications')
                            ->keyLabel('Specification Name')
                            ->valueLabel('Value')
                            ->helperText('Add product specifications like "Power: 100W", "Size: 12 inches", etc.'),
                    ]),

                Forms\Components\Section::make('Status & Visibility')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Inactive products will not appear on the website'),
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured Product')
                            ->default(false)
                            ->helperText('Featured products will appear on the homepage'),
                        Forms\Components\TextInput::make('weight')
                            ->numeric()
                            ->suffix('kg')
                            ->step(0.01)
                            ->minValue(0)
                            ->helperText('Product weight in kilograms (optional)'),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_image')
                    ->label('Image')
                    ->html()
                    ->formatStateUsing(function ($record) {
                        if ($record->main_image) {
                            $url = asset('storage/' . $record->main_image);
                            return '<img src="' . $url . '" style="width:60px;height:60px;object-fit:cover;border-radius:8px;border:2px solid #f59e0b;">';
                        }
                        return '<div style="width:60px;height:60px;background:#e5e7eb;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#9ca3af;font-size:20px;">
                                    <i class="fas fa-image"></i>
                                </div>';
                    }),
                Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(30),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Brand')
                    ->sortable()
                    ->badge()
                    ->color('warning'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->money('USD')
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('stock_quantity')
                    ->label('Stock')
                    ->badge()
                    ->color(fn(string $state): string =>
                        $state <= 0 ? 'danger' : ($state <= 5 ? 'warning' : 'success')
                    ),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Category'),
                Tables\Filters\SelectFilter::make('brand_id')
                    ->relationship('brand', 'name')
                    ->label('Brand'),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active')
                    ->placeholder('All')
                    ->trueLabel('Active')
                    ->falseLabel('Inactive'),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured'),
                Tables\Filters\TernaryFilter::make('in_stock')
                    ->label('In Stock'),
                Tables\Filters\Filter::make('low_stock')
                    ->label('Low Stock')
                    ->query(fn($query) => $query->where('stock_quantity', '<=', 5)->where('stock_quantity', '>', 0)),
                Tables\Filters\Filter::make('out_of_stock')
                    ->label('Out of Stock')
                    ->query(fn($query) => $query->where('stock_quantity', '=', 0)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->successNotificationTitle('Product deleted successfully'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->successNotificationTitle('Products deleted successfully'),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activate Selected')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['is_active' => true]))
                        ->deselectRecordsAfterCompletion()
                        ->successNotificationTitle('Products activated successfully'),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Deactivate Selected')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(fn($records) => $records->each->update(['is_active' => false]))
                        ->deselectRecordsAfterCompletion()
                        ->successNotificationTitle('Products deactivated successfully'),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->poll('10s');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }
}
