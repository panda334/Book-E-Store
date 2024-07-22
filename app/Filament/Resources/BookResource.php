<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Book;
use Filament\Tables;
use App\Models\Author;
use Filament\Forms\Form;
use App\Models\Condition;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\BookResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\BookResource\RelationManagers;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Create A Book')
            ->schema([
                TextInput::make('name')->minLength('3')->maxLength('20')->required(),
                TextInput::make('title')->minLength('3')->maxLength('40')->required(),
                TextInput::make('price')->numeric()->maxValue(10000)->minValue(0),
                MarkdownEditor::make('description')->required()->columnSpanFull(),
                
            ])->columns(2),
            SpatieMediaLibraryFileUpload::make('avatar')
             ->label('image')
             ->collection('images')
             ->responsiveImages()
             ->conversion('thumb'),
             

            
           Section::make('Related')
           ->schema([

            Select::make('condition_id')
            ->label('Condition of book')
            ->required()
            ->options(
                Condition::all()->pluck('name' , 'id')
            ),

            
            Select::make('author_id')
            ->label('Author')
            ->required()
            ->options(
                Author::all()->pluck('name' , 'id')
            ),
            
            Select::make('category_id')
            ->label('categories')
            ->required()
            ->multiple()    
            ->relationship('categories', 'name')
            ->preload()
            ->required()
        ])->columns(2),        
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')
            ->toggleable(isToggledHiddenByDefault:true)
            ->sortable(),

            SpatieMediaLibraryImageColumn::make('images')
             ->toggleable()
             ->collection('images')
             ->conversion('thumb'),


            TextColumn::make('name')
            ->searchable()
            ->toggleable()
            ->sortable(),

            TextColumn::make('title') 
            ->searchable()
            ->toggleable()
            ->sortable(),

            TextColumn::make('price')
            ->default(0)
            ->money('eur' ,locale:'nl')
            ->searchable()
            ->toggleable()
            ->sortable(),

            // TextColumn::make('categories_id')
            // ->label('category')
            // ->searchable()
            // ->toggleable()
            // ->sortable()
            // ->getStateUsing(function (Book $book) {
            //     return $book->categories->pluck('name')->take(2)->implode(', ');
            // }),
            TextColumn::make('categories')
            ->label('Categories')
            ->toggleable()
                ->getStateUsing(function (Book $book) {
                    return $book->categories->pluck('name')->join(', ');
                })
            ,
            //TextColumn::make('author')
             //->getStateUsing(function (Book $book) {
               // return $book->author()->pluck('name');
             //})
             //->searchable()
             //->toggleable(),
             TextColumn::make('author_id')
             ->label('Author')
             ->searchable()
             ->toggleable()
             ->getStateUsing(function (Book $book) {
                return $book->author()->pluck('name')->join(', ');
            }),

             TextColumn::make('condition_id')
             ->label('Condition')
             ->toggleable()
             ->sortable()
             ->getStateUsing(function (Book $book) {
                return $book->condition()->pluck('name')->join(', ');
            })


        ])
            ->filters([
                SelectFilter::make('category_id')
                ->label('Categories')
                ->relationship('categories' , 'name')
                ->searchable()
                ->preload(),

                SelectFilter::make('condition_id')
                ->label('Condition')
                ->relationship('condition' , 'name')
                ->searchable()
                ->preload(),

                SelectFilter::make('author_id')
                ->label('author')
                ->relationship('author' , 'name')
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
