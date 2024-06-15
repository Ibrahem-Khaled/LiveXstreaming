<?php
namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;

        if ($request->hasFile('image')) {
            $slider->image = $request->file('image')->store('images', 'public');
        }

        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function update(Request $request, Slider $slider)
    {
        $slider->title = $request->title;
        $slider->description = $request->description;

        if ($request->hasFile('image')) {
            $slider->image = $request->file('image')->store('images', 'public');
        }

        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}