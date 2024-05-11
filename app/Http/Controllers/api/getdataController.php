<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Channel;
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
    public function search($data)
    {
        if (empty($data)) {
            return response()->json(['message' => 'Data is empty'], 404);
        }

        $channels = Channel::where('name', 'like', '%' . $data . '%')->get();

        if ($channels->isEmpty()) {
            return response()->json(['message' => 'No channels found'], 404);
        }

        return response()->json($channels);
    }
}
