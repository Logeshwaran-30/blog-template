<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request; 

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $searchQuery = $request->input('search');

        $featuredPosts = Post::whereHas('category', function ($query) {
            $query->where('featured', 'Yes');
        })
        ->when($searchQuery, function ($query, $searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%')
                         ->orWhere('short_description', 'like', '%' . $searchQuery . '%');
        })
        ->paginate(6);

        return view('blogs.index', compact('categories', 'featuredPosts'));
    }

    public function allPosts(Request $request)
    {
        $searchQuery = $request->input('search');

        $posts = Post::when($searchQuery, function ($query, $searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%')
                         ->orWhere('short_description', 'like', '%' . $searchQuery . '%');
        })
        ->paginate(9);

        return view('blogs.all', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $related_posts = Post::where('category_id',$post->category_id)->where('id','!=',$post->id)
        ->take(3)
        ->get();
        return view('blogs.show', compact('post','related_posts'));
      
    }

    public function display($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->get();

        return view('blogs.display', compact('category', 'posts'));
    }
    public function showByTag($tag)
    {
    $tag = Tag::where('tag', $tag)->firstOrFail(); 
    $posts = $tag->posts()->paginate(6); 

    return view('blogs.tag', compact('tag', 'posts'));
    }
    

    
}
    






