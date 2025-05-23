<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    // Menonaktifkan timestamps
    public $timestamps = false;

    // Menentukan kolom yang bisa diisi
    protected $fillable = ['title', 'author', 'book_image'];
}
