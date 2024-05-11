<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $categores = Categorie::all();
        return view('home', compact('categores'));
    }
}
