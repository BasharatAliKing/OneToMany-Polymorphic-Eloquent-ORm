<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $video=Video::with('comments')->get();
        return $video;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $video=Video::create([
            'title'=>'First Video',
            'url'=>'videos/video.mp4',
        ]);
        $video->comments()->create([
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum?',
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
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
