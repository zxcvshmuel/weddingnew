<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Frame;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FrameResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FrameResource\RelationManagers;
use Imagick;

class FrameResource extends Resource
{
    protected static ?string $model = Frame::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Frame Name
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                // SVG File Upload
                Forms\Components\FileUpload::make('svg_path')
                    ->label('SVG File')
                    ->required()
                    ->acceptedFileTypes(['image/svg+xml'])
                    ->disk('public')
                    ->maxSize(51200)
                    ->directory('frames/svg')
                    ->visibility('public')
                    ->afterStateUpdated(function ($state, callable $set) {}),

                Forms\Components\FileUpload::make('thumbnail_path')
                    ->label('Thumbnail File')
                    ->required()
                    ->acceptedFileTypes(['image/png'])
                    ->disk('public')
                    ->maxSize(51200)
                    ->directory('frames/thumbnails')
                    ->visibility('public')
                    ->afterStateUpdated(function ($state, callable $set) {}),

                // Categories
                Forms\Components\Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->preload(),

                // Description
                Forms\Components\Textarea::make('description')
                    ->rows(3),

                // Add the HasManyRepeater for FrameTextElements
                Forms\Components\Repeater::make('textElements')
                    ->relationship('textElements')
                    ->schema([
                        Forms\Components\TextInput::make('uid')
                            ->label('Uid')
                            ->nullable()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->nullable()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('default_text')
                            ->label('Default Text')
                            ->nullable()
                            ->maxLength(255),
                    ])
                    ->collapsible()
                    ->addActionLabel('Add Text Element'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('svg_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListFrames::route('/'),
            'create' => Pages\CreateFrame::route('/create'),
            'edit' => Pages\EditFrame::route('/{record}/edit'),
        ];
    }
}
