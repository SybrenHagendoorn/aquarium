<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\fish;

class FishController extends Controller
{
  public function index() {
  $fishes = fish::all();
    return view('fishes.index', ['fishes' => $fishes]);
  }
}
