<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return $posts;
    }
    public function show(Post $post){
        return $post;
    }
    public function store(CreatePostRequest $request){
        $post = Post::create($request->all());
        return response()->json($post,201);
    }
    public function update(UpdatePostRequest $request,Post $post){
        $post->update($request->all());
        return response()->json($post,200);
    }
    public function destroy(Post $post){
        $post->delete();
        return response()->noContent();
    }
}
