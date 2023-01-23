<?php

namespace App\Http\Views;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Picture;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FilmView extends Controller
{
    public function mainPage(Request $request)
    {
        $queryParams = $request->toArray();





        return view('main_page', [
            "genres" => Genre::all(),
            "countries" => Country::all(),
            "years" => range(Carbon::now()->year, 2000),
            "rates" => [
                '<4',
                '4-6',
                '6-8',
                '>8',
            ],
            "films" => Film::all(),

        ]);
    }
}
