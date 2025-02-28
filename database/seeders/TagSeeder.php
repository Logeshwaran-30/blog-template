<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert example data into the tags table
        DB::table('tags')->insert([
            ['tag' => 'Entertainment'],
            ['tag' => 'Virtual Reality'],
            ['tag' => 'Movies' ],
            ['tag' => 'Comedy'],
            ['tag' => 'Romatic'],
            ['tag' => 'Action' ],
            ['tag' => 'Aggression'],
            ['tag' => 'Player of the match'],
            ['tag' => 'Blog'],
            ['tag' => 'Design'],
        ]);
    }
}
