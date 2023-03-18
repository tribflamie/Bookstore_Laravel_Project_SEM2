<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'book' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'language' => 'Spanish',
            'published' => 1605,
            'sales' => 500,
            'genre' => 'Adventure Fiction',
            'price' => 17.00,
            'discount' => 0.20,
            'photo' => 'images/shop/Don-Quixote.jpg',
        ]);
        DB::table('products')->insert([
            'book' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'language' => 'Spanish',
            'published' => 1605,
            'sales' => 500,
            'genre' => 'Adventure Fiction',
            'price' => 17.00,
            'discount' => 0.20,
            'photo' => 'images/shop/Don-Quixote.jpg',
        ]);
        DB::table('products')->insert([
            'book' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'language' => 'Spanish',
            'published' => 1605,
            'sales' => 500,
            'genre' => 'Adventure Fiction',
            'price' => 17.00,
            'discount' => 0.20,
            'photo' => 'images/shop/Don-Quixote.jpg',
        ]);
        DB::table('products')->insert([
            'book' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'language' => 'Spanish',
            'published' => 1605,
            'sales' => 500,
            'genre' => 'Adventure Fiction',
            'price' => 17.00,
            'discount' => 0.20,
            'photo' => 'images/shop/Don-Quixote.jpg',
        ]);
    }
}
