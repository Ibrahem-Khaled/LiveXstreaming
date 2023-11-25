<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class addcategoriesController extends Controller
{
    public function index()
    {
        $categories = Categorie::latest()->paginate(5);
        return view('categories.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        Categorie::create($input);

        return redirect()->route('home')->with('success', 'Company has been created successfully.');
    }

    public function show($id)
    {
        $cate = Categorie::find($id);
        return view('categories.edit', compact('cate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();
        
        Categorie::find($id)->update($input);

        return redirect()->route('home')
            ->with('success', 'Product updated successfully');
    }
    public function destroy($id)
    {
        Categorie::find($id)->delete();

        return redirect()->route('home')
            ->with('success', 'Product deleted successfully');
    }
}
