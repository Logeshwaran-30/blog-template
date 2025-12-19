<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            ['tag' => 'Laravel', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'PHP', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Node.js', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'React', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Next.js', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'MongoDB', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'MySQL', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'API', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Backend', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Frontend', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Fullstack', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'JavaScript', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Tailwind CSS', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Framer Motion', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Docker', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'DevOps', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Cloud', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'AWS', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Startup', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'UI/UX', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Design', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'SEO', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Performance', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Security', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Testing', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'REST', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'GraphQL', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Microservices', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Authentication', 'created_at' => now(), 'updated_at' => now()],
            ['tag' => 'Deployment', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
