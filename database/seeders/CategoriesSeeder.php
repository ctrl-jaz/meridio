<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\HASH;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //inserting multiple categories
    //Step 1: create the array of categories
    $categories = [
        ['name' => "Food"],
        ['name' => "Clothing"],
        ['name' => "Sanitation materials"],
        
        ['name' => "Educational"],
        ];
        //Step 2: insert the array using Query Builder
        DB::table('categories')->insert($categories);
        }
    }