<?php

namespace Database\Seeders;
    
    use Illuminate\Database\Seeder;
    use App\Models\Post;
    use App\Models\Tag;
    
    class PostTagSeeder extends Seeder
    {
        public function run()
        {         
            $post = Post::find(1); 
            $tags = [1, 2, 3]; 
  
            $post->tags()->attach($tags);
    
            
    
            $posts = Post::all(); 
    
            foreach ($posts as $post) {
              
                $randomTags = Tag::inRandomOrder()->take(3)->pluck('id')->toArray();
                $post->tags()->attach($randomTags);
            }
        }
    }
    

