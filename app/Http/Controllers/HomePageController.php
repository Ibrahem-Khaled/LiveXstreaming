<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Channel;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Categorie::get();
        $channels = Channel::where('is_active', 1)->paginate(10);

        return view('home', compact('sliders', 'categories', 'channels'));
    }

    public function player($channelId)
    {
        $channel = Channel::find($channelId);
        $categories = Categorie::all();
        return view('player', compact('channel', 'categories'));
    }

}
