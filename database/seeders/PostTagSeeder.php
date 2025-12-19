<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
    public function run(): void
    {
        $postIds = Post::pluck('id')->toArray();
        $tagIds  = Tag::pluck('id')->toArray();

        foreach ($postIds as $postId) {
            // Attach 3 to 5 random tags per post
            $randomTags = collect($tagIds)->random(rand(3, 5));

            foreach ($randomTags as $tagId) {
                DB::table('post_tags')->insert([
                    'post_id' => $postId,
                    'tag_id'  => $tagId,
                ]);
            }
        }
    }
}
