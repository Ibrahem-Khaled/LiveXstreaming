<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Channel;
use Illuminate\Http\Request;

class addchannelController extends Controller
{
    public function index($id)
    {
        $channels = Categorie::find($id)->channel;
        return view('channels.index', compact('channels'));
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'categorie_id' => 'required',
            'image' => 'required|max:2048',
        ]);

        $input = $request->all();

        Channel::create($input);

        return redirect()->route('home')
            ->with('success', 'Product updated successfully');
    }

    public function show($id)
    {
        $cate = Channel::find($id);
        return view('channels.edit', compact('cate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        Channel::find($id)->update($input);

        return redirect()->route('home')
            ->with('success', 'Product updated successfully');
    }
    public function destroy($id)
    {
        Channel::find($id)->delete();

        return redirect()->route('home')
            ->with('success', 'Product deleted successfully');
    }
}
