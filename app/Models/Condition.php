<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['name'];

    use HasFactory;
    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
