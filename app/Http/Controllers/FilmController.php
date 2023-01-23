<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->toArray();
        $film = new Film();
        $film->name = $data['name'];
        $film->description = $data['description'];
        $film->original_name = $data['original_name'];
        $film->star = $data['star'];
        $film->kinopoisk_rate = $data['kinopoisk_rate'];
        $film->imbd_rate = $data['imbd_rate'];
        $film->year = $data['year'];
        $film->picture = $data['picture'];
        $film->long = $data['long'];
        $film->premiere = $data['premiere'];
        $film->download_link = $data['download_link'];
        $film->save();
        return new JsonResponse($data);
    }
}
