<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->toArray();
        $country = new Country();
        $country->name = $data['name'];
        $country->save();
        return new JsonResponse($data);
    }
}
