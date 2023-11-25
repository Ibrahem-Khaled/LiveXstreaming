<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class getdataController extends Controller
{
    public function categories()
    {
        $cate = Categorie::latest()->get();

        return response()->json([
            'categories' => $cate,
        ]);
    }
    public function channels($id)
    {
        $cate = Categorie::find($id)->channel;
        return response()->json([
            'categories' => $cate,
        ]);
    }
}
