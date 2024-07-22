<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Condition;
use App\Models\BookCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Book extends Model implements HasMedia
{
    protected $fillable = ['name' , 'title' , 'price' , 'description' , 'author_id' , 'condition_id'];

    use HasFactory;
    use InteractsWithMedia;
    
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(626)
              ->height(626)
              ->sharpen(0);
    }


    public function author () 
    {
        return $this->belongsTo(Author::class);
    }
    public function purchases ()
    {
        return $this->hasMany(Purchase::class);
    }
    public function condition ()
    {
       return $this->belongsTo(Condition::class);
    }
    public function categories ()
    {
       return $this->belongsToMany(Category::class , 'book_categories');
    }
}
