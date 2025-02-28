<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'The Rise of E-Sports in Global Competitions',
                'slug' => 'the-rise-of-e-sports-in-global-competitions',
                'short_description' => 'The rapid growth of e-sports and its impact on global sports events.',
                'description' => 'E-sports have emerged as a significant force in global sporting events, offering intense competition and drawing huge crowds both online and offline. The evolution of online streaming and the rise of gaming communities have paved the way for e-sports to become a legitimate sport recognized worldwide.',
                'category_id' => 1, // Category ID for sports
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fun Activities for Kids to Boost Creativity',
                'slug' => 'fun-activities-for-kids-to-boost-creativity',
                'short_description' => 'Creative activities to help kids express themselves.',
                'description' => 'Encouraging creativity in children is essential for their growth. This post covers various fun and educational activities that children can engage in to enhance their creative skills, from painting and drawing to building simple structures with everyday objects.',
                'category_id' => 5, // Category ID for kids
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Top Football Rivalries Around the World',
                'slug' => 'top-football-rivalries-around-the-world',
                'short_description' => 'A look at the fiercest football rivalries across the globe.',
                'description' => 'Football rivalries have been a part of the game for as long as the sport has existed. Whether it’s Barcelona vs. Real Madrid, Manchester United vs. Liverpool, or Boca Juniors vs. River Plate, these matches captivate millions of fans every year with intense competition and passion.',
                'category_id' => 1, // Category ID for sports
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Importance of Play in Child Development',
                'slug' => 'the-importance-of-play-in-child-development',
                'short_description' => 'Why play is essential for healthy child development.',
                'description' => 'Play is a crucial element of childhood development. Through play, children learn social skills, problem-solving techniques, and how to manage emotions. This post delves into the various benefits of play and how it contributes to a child’s overall well-being.',
                'category_id' => 5, // Category ID for kids
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Influence of Cricket on Global Sports Culture',
                'slug' => 'the-influence-of-cricket-on-global-sports-culture',
                'short_description' => 'How cricket has shaped sports culture around the world.',
                'description' => 'Cricket is more than just a game; it is a cultural phenomenon. From the bustling streets of India to the green fields of England, cricket has impacted communities in profound ways, inspiring millions and building a unique bond among fans globally.',
                'category_id' => 1, // Category ID for sports
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to Help Your Child Build Healthy Habits',
                'slug' => 'how-to-help-your-child-build-healthy-habits',
                'short_description' => 'Tips for encouraging healthy habits in kids.',
                'description' => 'Establishing healthy habits early on can set the foundation for a child’s future. This post offers tips and strategies for parents to help their kids build habits related to eating well, staying active, and getting enough rest.',
                'category_id' => 5, // Category ID for kids
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Evolution of Formula 1 Racing Technology',
                'slug' => 'the-evolution-of-formula-1-racing-technology',
                'short_description' => 'A deep dive into the technological innovations in Formula 1.',
                'description' => 'Formula 1 racing has always been at the forefront of technological advancement in the world of motorsports. From aerodynamics to engine development, every aspect of the sport has evolved, pushing the limits of engineering and performance at every race.',
                'category_id' => 1, // Category ID for sports
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Best Books for Kids to Read at Every Age',
                'slug' => 'best-books-for-kids-to-read-at-every-age',
                'short_description' => 'A list of the best books for kids of different ages.',
                'description' => 'Reading is one of the most beneficial activities for children. In this post, we explore the best books for children of all ages, from toddlers to pre-teens, that not only encourage a love for reading but also promote learning and imagination.',
                'category_id' => 5, // Category ID for kids
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Psychology Behind Successful Athletes',
                'slug' => 'the-psychology-behind-successful-athletes',
                'short_description' => 'Understanding the mental toughness of top athletes.',
                'description' => 'Mental strength plays a critical role in the success of athletes. The ability to perform under pressure, overcome setbacks, and stay focused is often what separates the best from the rest. This article explores the psychological traits of some of the world’s most successful athletes.',
                'category_id' => 1, // Category ID for sports
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Building Emotional Intelligence in Children',
                'slug' => 'building-emotional-intelligence-in-children',
                'short_description' => 'Teaching kids to manage emotions and develop empathy.',
                'description' => 'Emotional intelligence is a key factor in a child’s success in life. This post explores practical methods for parents and educators to help children understand and manage their emotions, build empathy, and develop strong interpersonal skills.',
                'category_id' => 5, // Category ID for kids
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}

