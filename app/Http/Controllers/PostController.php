<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::with('comments')->get();
        return $posts;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create Post
        $post=Post::create([
           'title'=>'Daffodils',
           'description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, repellendus!',
        ]);
        $post->comments()->create([
            'detail'=>'First Video lorer fd fjdfd ifhdfi dgdgd gd gd',
               ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
