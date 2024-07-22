<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCategory extends Model
{
    protected $fillable = ['book_id' , 'category_id'];

    use HasFactory;

    public function book ()
    {
        return $this->belongsTo(Book::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
