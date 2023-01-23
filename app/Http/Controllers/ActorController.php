<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->toArray();
        $actor = new Actor();
        $actor->first_name = $data['first_name'];
        $actor->last_name = $data['last_name'];
        $actor->save();
        return new JsonResponse($data);
    }
}
