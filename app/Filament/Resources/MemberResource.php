<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Faker\Provider\Image;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()->placeholder('Enter member name')
                    ->maxLength(255),
                TextInput::make('designation')
                    ->label('Designation')
                    ->required()->placeholder('Enter member designation')
                    ->maxLength(255),
                TextInput::make('fb_url')
                    ->label('Facebook URL')
                    ->url()->placeholder('https://www.facebook.com/yourprofile')
                    ->maxLength(255)
                    ->nullable(),
                TextInput::make('twitter_url')
                    ->label('Twitter URL')
                    ->url()->placeholder('https://www.twitter.com/yourprofile')
                    ->maxLength(255)
                    ->nullable(),
                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url()->placeholder('https://www.linkedin.com/in/yourprofile')
                    ->maxLength(255)
                    ->nullable(),
                TextInput::make('instagram_url')
                    ->label('Instagram URL')
                    ->url()->placeholder('https://www.instagram.com/yourprofile')
                    ->maxLength(255)
                    ->nullable(),
                FileUpload::make('image')
                    ->label('Image')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(5 * 1024 * 1024) // 5MB
                    ->nullable(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->default(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Profile Picture')
                    ->circular()
                    ->size(50)
                    ->defaultImageUrl(Image::imageUrl(50, 50, 'people')),
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation')
                    ->label('Designation')
                    ->sortable()
                    ->searchable(),
              Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return [
                            1 => 'Active',
                            0 => 'Inactive',
                        ][$state] ?? 'Unknown';
                    })
                    ->badge() // enables badge styling
                    ->color(function ($state) {
                        return match ($state) {
                            1 => 'success',
                            0 => 'danger',
                            default => 'secondary',
                        };
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
