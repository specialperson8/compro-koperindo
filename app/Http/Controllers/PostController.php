<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
      public function index()
    {
        // Ambil semua post, urutkan dari yang terbaru, dan gunakan pagination
        $posts = Post::latest()->paginate(9); // Tampilkan 9 post per halaman

        return view('pages.posts.index', compact('posts'));
    }

    public function show(Post $post) // Laravel otomatis inject model Post
    {
        // Pastikan slug yang diminta sesuai dengan slug post yang ada
        return view('pages.posts.show', compact('post'));
    }

    public function byCategory(PostCategory $category)
    {
        // Ambil semua post yang sesuai dengan kategori, urutkan dari yang terbaru
        $posts = $category->posts()->latest()->paginate(9); // Tampilkan 9 post per halaman

        return view('pages.posts.index', [
            'posts' => $posts,
            'categoryName' => $category->name,
        ]);
    }
}
