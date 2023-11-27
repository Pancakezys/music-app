<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard',[
    'songs'=>Song::get(),
]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->src) {
            $exploded = explode(',', $request->src);
            $decoded = base64_decode($exploded[1]);
            $fileName= 'audio/'.$request->title.'.'.'mp3';
            $request->merge(['src' => $fileName]);
            Storage::put('/public/'.$fileName, $decoded);
        }
        if ($request->cover) {
            $exploded = explode(',', $request->cover);
            $decoded = base64_decode($exploded[1]);
            $fileName= 'images/'.$request->title.'.'.'jpg';
            $request->merge(['cover' => $fileName]);
            Storage::put('/public/'.$fileName, $decoded);
        }
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'cover' => $request->cover,
            'src' => $request->src,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
