<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Sports', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Technology', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Movies', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Design', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kids', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entertainment', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Education', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Art', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }

    
}
