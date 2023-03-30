<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'country' => 'Habsburg Spain',
            'published' => 1605,
            'sales' => 500,
            'price' => 17,
            'discount' => 0.10,
            'photo' => 'images/shop/1Don-Quixote.jpg',
            'description' => 'Don Quixote is a Spanish epic novel by Miguel de Cervantes. Originally published in two parts, in 1605 and 1615, its full title is The Ingenious Gentleman Don Quixote of La Mancha or, in Spanish, El ingenioso hidalgo don Quixote de la Mancha (changing in Part 2 to El ingenioso caballero don Quixote de la Mancha). A founding work of Western literature, it is often labelled as the first modern novel and one of the greatest works ever written. Don Quixote is also one of the most-translated books in the world and the best-selling novel of all time.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => "Harry Potter and the Philosopher's Stone",
            'author' => 'J. K. Rowling',
            'country' => 'United Kingdom',
            'published' => 1997,
            'sales' => 120,
            'price' => 15.00,
            'discount' => 0.10,
            'photo' => "images/shop/1Harry_Potter_and_the_Philosopher's_Stone_Book_Cover.jpg",
            'description' => "Harry Potter and the Philosopher's Stone is a 1997 fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school and with the help of his friends, Ron Weasley and Hermione Granger, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just 15 months old.",
        ]);
    }
}
