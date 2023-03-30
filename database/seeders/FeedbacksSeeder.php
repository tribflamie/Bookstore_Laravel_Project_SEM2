<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert feedbacks table
        DB::table('feedbacks')->insert([
            'users_id' => 1,
            'products_id' => 1,
            'rating' => 5,
            'description' => 'This is so cool! i love it'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 1,
            'products_id' => 2,
            'rating' => 4,
            'description' => 'This is not good in my expectations'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 1,
            'products_id' => 2,
            'rating' => 5,
            'description' => 'This is so cool! i love it'
        ]);
    }
}
