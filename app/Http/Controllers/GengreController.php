<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GengreController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->toArray();
        $genre = new Genre();
        $genre->name = $data['name'];
        $genre->save();
        return new JsonResponse($data);
    }
}
