<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Categorie::with([
            'channels' => function ($query) {
                $query->take(5);
            }
        ])->get();

        return view('home', compact('sliders', 'categories'));
    }
}
