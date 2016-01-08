<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Song;

class songsController extends Controller
{
  public function __construct(Song $song)
  {
    $this->song =$song;
  }

    public function index()
    {
      //$songs = $this->getSongs();
      $songs = $this->song->get();

      return view('songs.index', compact('songs'));
    }

    public function show($slug)
    {
      $song=$this->song->whereSlug($slug)->first();
      return view('songs.show', compact('song'));
    }

    public function edit($slug)
 {
     $song=$this->song->whereSlug($slug)->first();
    return view('songs.edit', compact('song'));
 }

  public function update($slug, Request $request)
  {
      $song=$this->song->whereSlug($slug)->first();
      $song->fill($request->input())->save();
    return redirect('songs');
  }


}
