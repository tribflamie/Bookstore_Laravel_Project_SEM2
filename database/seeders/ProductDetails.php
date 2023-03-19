<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetails extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_details')->insert([
            'id'=>1,
            'book'=>'abc' ,
            'author'=>'def',
            'originalTitle'=>'ads',
            'country'=>'12e',
            'genre'=>'123das',
             'language'=>'4d',
             'publishedDate'=>'1999-1-1',
             'price'=>1,
             'discount'=>0.2,
             'photo'=>'images/shop/Don-Quixote.jpg',
             'mediaType'=>'dasdw',
             'description'=>'dwad'
        ]);
    }
}
