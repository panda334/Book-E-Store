<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('password')->password()->visibleOn('create'),
                Select::make('roles')->multiple()->relationship('roles', 'name')
                ->options(
                    Role::all()->pluck('name' , 'id')
                ),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->searchable()
                ->toggleable(),
               TextColumn::make('name')
                ->searchable()
                ->toggleable()
                ->sortable(),
               TextColumn::make('email')
                ->searchable()
                ->toggleable()
                ->sortable(),

                TextColumn::make('role_id')
                ->label('Roles')
                ->toggleable()
                ->getStateUsing(function (User $user) {
                    return $user->roles()->pluck('name')->join(', ');
                }),
            
               TextColumn::make('created_at')
                ->label('Published On')
                ->dateTime('M ,D ,Y')
                ->sortable(),
                
            ])
            ->filters([
                SelectFilter::make('role')
                ->label('roles')
                ->relationship('roles' , 'name')
                ->searchable()
                ->preload(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
