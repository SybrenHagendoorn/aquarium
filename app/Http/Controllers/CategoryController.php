<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
  public function index() {

    $categories = category::all();
  /*  foreach ($categories as $category) {
      $itfish = $category->fish;
    }*/
    return view('categories.index', ['categories' => $categories]);
  }
}
