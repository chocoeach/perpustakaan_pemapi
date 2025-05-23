<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Learning PHP, MySQL & JavaScript',
                'author' => 'Robin Nixon',
                'book_image' => 'book_images/Learning PHP, MySQL & JavaScript by Robin Nixon.png',
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'book_image' => 'book_images/Clean Code by Robert C. Martin.png',
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'book_image' => 'book_images/Introduction to Algorithms by Thomas H. Cormen.png',
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt',
                'book_image' => 'book_images/The Pragmatic Programmer by Andrew Hunt.png',
            ],
            [
                'title' => 'Design Patterns',
                'author' => 'Erich Gamma',
                'book_image' => 'book_images/Design Patterns by Erich Gamma.png',
            ],
            [
                'title' => 'Head First Java',
                'author' => 'Kathy Sierra',
                'book_image' => 'book_images/Head First Java by Kathy Sierra.png',
            ],
            [
                'title' => 'JavaScript: The Good Parts',
                'author' => 'Douglas Crockford',
                'book_image' => 'book_images/JavaScript: The Good Parts by Douglas Crockford.png',
            ],
            [
                'title' => 'PHP and MySQL Web Development',
                'author' => 'Luke Welling',
                'book_image' => 'book_images/PHP and MySQL Web Development by Luke Welling.png',
            ],
            [
                'title' => 'Modern Operating Systems',
                'author' => 'Andrew S. Tanenbaum',
                'book_image' => 'book_images/Modern Operating Systems by Andrew S. Tanenbaum.png',
            ],
            [
                'title' => 'Python Crash Course',
                'author' => 'Eric Matthes',
                'book_image' => 'book_images/Python Crash Course by Eric Matthes.png',
            ],
            [
                'title' => 'Eloquent JavaScript',
                'author' => 'Marijn Haverbeke',
                'book_image' => 'book_images/Eloquent JavaScript by Marijn Haverbeke.png',
            ],
            [
                'title' => 'The Art of Computer Programming',
                'author' => 'Donald E. Knuth',
                'book_image' => 'book_images/The Art of Computer Programming by Donald E. Knuth.png',
            ],
            [
                'title' => 'Artificial Intelligence: A Modern Approach',
                'author' => 'Stuart Russell',
                'book_image' => 'book_images/Artificial Intelligence: A Modern Approach by Stuart Russell.png',
            ],
            [
                'title' => 'The C Programming Language',
                'author' => 'Brian W. Kernighan',
                'book_image' => 'book_images/The C Programming Language by Brian W. Kernighan.png',
            ],
            [
                'title' => 'Data Structures and Algorithms in Java',
                'author' => 'Robert Lafore',
                'book_image' => 'book_images/Data Structures and Algorithms in Java by Robert Lafore.png',
            ],
        ]);
    }
}
