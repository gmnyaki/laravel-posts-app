<?php

// Define the namespace and import required classes.
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
	// Define a method that retrieves a user's posts and returns them in a paginated view.
    public function index(User $user)
    {
    	$posts = $user->posts()->paginate(5);// Retrieve the user's posts and paginate them.
    	return view('users.posts.index', compact('posts', 'user'));
    		
    }
}
