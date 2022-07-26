<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            'title' => 'Posts',
            'datas' => $posts->get(),
        ]);
    }

    public function typename(User $user)
    {
        return view('all', [
            'title' => "By Category : $user->name",
            'datas' => $user->post->load('user', 'category'),
        ]);
    }

    public function detail(Post $post)
    {
        return view('detail', [
            'title' => 'Detail',
            'datas' => $post->load('user', 'category'),
        ]);
    }
}
