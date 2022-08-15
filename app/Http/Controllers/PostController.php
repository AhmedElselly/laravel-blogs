<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Get all posts
    public function index(){
        $posts = Post::with(['user'])->get();
        return view('posts.index', ['posts' => $posts]);
    }
    // Create form
    public function form(){
        return view('posts.createForm');
    }
    // Creating post
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        // if($request -> hasFile(('logo'))){
        //     $formFields['logo'] = $request -> file('image') -> store('image', 'public');
        // }
        $formFields['user_id'] = auth()->id();
        Post::create($formFields);
        return redirect('/')->with('message', 'Post created successfully!');
    }
    // updating post
    public function update(Request $request){

    }

    // removing post
    public function remove(Post $post){

    }
}
