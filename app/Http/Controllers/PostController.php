<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;


class PostController extends Controller
{
    function index () {
        // dd(request()->user()->posts);
        $posts=Post::all(); //el post de beta3et el model ale anabakalem beh el DB
        return view('posts.index',[ 'posts' => $posts]);
    }
        
    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        //  dd($request->user());
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => $request -> user() ->id,
        ]);
        return redirect()->route('posts.index');

    }


    public function edit($post)
    {
        // dd($post);
        $post = Post::find($post);

        return view('posts.edit',['post'=>$post]);
    }


    public function update($post,StorePostRequest $request){
    
            // $post->update(request()->all());
    $post = Post::find($post);

    $post->title =request()->title;
    $post->description =request()->description;

    $post->save();
    return redirect()->route('posts.index');


     }

    public function show($post){
         $post = Post::find($post);
       return view('posts.show',['post'=>$post]);

    }
    public function destroy($post){
        Post::find($post)->delete();
        return redirect()->route('posts.index');
    }


}
