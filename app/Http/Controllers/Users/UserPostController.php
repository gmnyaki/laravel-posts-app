<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
    	$posts = $user->posts()->paginate(5);
    	return view('users.posts.index', compact('posts', 'user'));
    		
    }
}
