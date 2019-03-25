<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;

class ViewController extends Controller
{
    public function index() {
      return view('index');
    }

    public function coverage() {

      $tracks = Track::with('bumps')->get();

      return view('coverage')->with([
        'tracks' => $tracks
      ]);
    }
}
