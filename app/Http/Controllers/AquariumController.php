<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aquarium;

class AquariumController extends Controller
{
  public function index() {

    $categories = Aqaurium::all();
    return view('aquariums.index', ['aquaruims' => $aquariums]);
  }
}
