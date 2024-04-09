<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Social;

class BlogController extends Controller
{
    public function show(){

        $posts = Post::paginate(5);
        $latest = Post::latest()->limit(3)->get();
        $contact = Contact::all()[0];
        $socials = Social::all()[0];


        if(request('search')){
            $posts = Post::where('title', 'like', '%'. request('search') . '%' )
                            ->orWhere('body', 'like', '%'. request('search') . '%')
                            ->paginate(5)->withQueryString();
        }

        return view('blog.index', [
            'posts' => $posts,
            'latest' => $latest,
            'contact' => $contact,
            'socials' => $socials
        ]);
    }

    public function detail(Post $post)
    {
        $posts = Post::whereNot('slug', $post->slug)->limit(4)->get();
        $latest = Post::whereNot('slug', $post->slug)->latest()->limit(3)->get();
        $contact = Contact::all()[0];
        $socials = Social::all()[0];

        return view('blog.detail', [
            'posts' => $posts,
            'post' => $post,
            'latest' => $latest,
            'contact' => $contact,
            'socials' => $socials
        ]);
    }
}
