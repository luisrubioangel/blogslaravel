<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));

    }

    public function show(Post $post)
    {
        $similares = Post::where('catergory_id', $post->catergory_id)->where('status', 2)->where('id', '!=', $post->id)->latest('id')->take(4)->get();

        return view('posts.show', compact('post', 'similares'));
    }

    public function category(Catergory $category)
    {
        $posts = Post::where('catergory_id', $category->id)->where('status', 2)->latest('id')->paginate(6);

        return view('posts.category', compact('posts', 'category'));
    }

    public function tags(Tag $tag)
    {
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);

        return view('posts.tag', compact('posts', 'tag'));
    }
}
