<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->toArray();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->save();
        return new JsonResponse($data);
    }
}
