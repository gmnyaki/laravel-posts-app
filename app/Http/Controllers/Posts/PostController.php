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
    	$posts = Post::with('user')->latest()->paginate(5);//optimized for earger loading

    	return view('posts.index', compact('posts'));
    }
    //Store post in the database
    public function store(StorePostRequest $request)
    {
    	$request->user()->posts()->create($request->only('body'));

    	return back();
    }
    //Delete post 
    public function destroy(Request $request, Post $post)
    {
    	$this->authorize('delete', $post);
    	$post->delete();

    	return back();
    	 
    }
}
