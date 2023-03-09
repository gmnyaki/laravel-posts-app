<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }
    //show blade view
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(3);//optimized for earger loading

        return view('posts.index', compact('posts'));
    }
    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\Post\StorePostRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePostRequest $request)
    {
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
    /**
     * Destroy the specified resource from database.
     *
     * @param  Illuminate\Http\Request $request
     * @param  \App\Models\Post  $post
     * @return mixed
     */ 
    public function destroy(Request $request, Post $post)
    {
        // Determine if the user is authorized to delete the post.
        $this->authorize('delete', $post);

        $post->delete();

        return back();
         
    }
}
