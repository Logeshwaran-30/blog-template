<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['name' => 'Technology', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Startup', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Programming', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Web Development', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mobile Development', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AI & ML', 'featured' => 'Yes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Science', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cloud Computing', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cyber Security', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DevOps', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'UI/UX Design', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Digital Marketing', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lifestyle', 'featured' => 'No', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

