<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tumisudangsayur()
    {
        $post = DB::table('foods')->where('fid', '7')->first();

        return view('menus.menu_tumisudangsayur', ['post' => $post]);
    }

        public function chickenveggiesalad()
    {
        $post = DB::table('foods')->where('fid', '8')->first();

        return view('menus.menu_chickenveggiesalad', ['post' => $post]);
    }

        public function pecelkhasjawa()
    {
        $post = DB::table('foods')->where('fid', '9')->first();

        return view('menus.menu_pecelkhasjawa', ['post' => $post]);
    }

        public function fruitbowl()
    {
        $post = DB::table('foods')->where('fid', '10')->first();

        return view('menus.menu_fruitbowl', ['post' => $post]);
    }

        public function veggiespringroll()
    {
        $post = DB::table('foods')->where('fid', '11')->first();

        return view('menus.menu_veggiespringroll', ['post' => $post]);
    }

        public function cookieslabusiam()
    {
        $post = DB::table('foods')->where('fid', '12')->first();
        return view('menus.menu_cookieslabusiam', ['post' => $post]);
    }

        public function watermelonmojito()
    {
        $post = DB::table('foods')->where('fid', '13')->first();
        return view('menus.menu_watermelonmojito', ['post' => $post]);
    }

        public function lemoninfusedwater()
    {
        $post = DB::table('foods')->where('fid', '14')->first();
        return view('menus.menu_lemoninfusedwater', ['post' => $post]);
    }

        public function mangojuice()
    {
        $post = DB::table('foods')->where('fid', '15')->first();
        return view('menus.menu_mangojuice', ['post' => $post]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
