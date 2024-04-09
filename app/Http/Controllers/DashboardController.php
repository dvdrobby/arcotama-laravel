<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Client;

class DashboardController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $contacts = Contact::all();
        $clients = Client::latest()->get();

        return view('dashboard.index', [
            'posts' => $posts,
            'contacts' => $contacts,
            'clients' => $clients
        ]);
    }
}
