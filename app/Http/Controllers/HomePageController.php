<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $categore = Categorie::all();
        return view('home', compact('categore'));
    }
}
