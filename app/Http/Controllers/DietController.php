<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DietController extends Controller
{
    public function monday()
    {
        $post = DB::table('diets')->where('did', '1')->first();

        return view('diets.diet_monday', ['post' => $post]);
    }

        public function tuesday()
    {
        $post = DB::table('diets')->where('did', '2')->first();

        return view('diets.diet_tuesday', ['post' => $post]);
    }

        public function wednesday()
    {
        $post = DB::table('diets')->where('did', '3')->first();

        return view('diets.diet_wednesday', ['post' => $post]);
    }

        public function thursday()
    {
        $post = DB::table('diets')->where('did', '4')->first();

        return view('diets.diet_thursday', ['post' => $post]);
    }

        public function friday()
    {
        $post = DB::table('diets')->where('did', '5')->first();

        return view('diets.diet_friday', ['post' => $post]);
    }

        public function saturday()
    {
        $post = DB::table('diets')->where('did', '6')->first();

        return view('diets.diet_saturday', ['post' => $post]);
    }

        public function sunday()
    {
        $post = DB::table('diets')->where('did', '7')->first();

        return view('diets.diet_sunday', ['post' => $post]);
    }





}
