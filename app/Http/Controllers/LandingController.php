<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Social;
use App\Models\About;
use App\Models\Client;

class LandingController extends Controller
{
    public function index(){

        $posts = Post::latest()->limit(3)->get();
        $contact = Contact::all()[0];
        $socials = Social::all()[0];
        $about = About::all()[0];

        return view('index', [
            'posts' => $posts,
            'contact' => $contact,
            'socials' => $socials,
            'about' => $about
        ]);
    }

    public function overview(){

        $posts = Post::latest()->limit(3)->get();
        $contact = Contact::all()[0];
        $socials = Social::all()[0];
        $about = About::all()[0];

        return view('overview', [
            'posts' => $posts,
            'contact' => $contact,
            'socials' => $socials,
            'about' => $about
        ]);
    }

    public function clients(){

        $posts = Post::latest()->limit(3)->get();
        $contact = Contact::all()[0];
        $socials = Social::all()[0];
        $about = About::all()[0];
        $clients = Client::all();

        return view('clients', [
            'posts' => $posts,
            'contact' => $contact,
            'socials' => $socials,
            'about' => $about,
            'clients' => $clients
        ]);
    }
}
