<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postcontroller extends Controller
{
    public function show(Post $post)
    {
    	return view('show', [
    		'post' => $post,

    	]);
    }


}
