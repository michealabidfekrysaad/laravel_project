<?php

namespace App\Http\Controllers\Api;
use App\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;

class PostController extends Controller
{
   public function index () {
        return PostResource::collection(Post::with('user')->paginate(3));
    }

    public function show($id) { 
        $post = Post::find($id);
        return new  PostResource($post);
    }

    public function store(){
        //  dd($request->user());
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => request()->user()->id,
        ]);
        return response()->json(['successfull']);

    }
}
