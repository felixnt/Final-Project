<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FrontController extends Controller
{
    public function index()
    {
    	$cats = DB::table('foodcats')->get();

        $posts = DB::table('foods')->get();

        return view('frontend.index', ['cats'=>$cats], ['posts'=>$posts]);
    }

    public function menu()
    {
    	$cats = DB::table('foodcats')->get();

        $posts = DB::table('foods')->get();

        return view('frontend.menu', ['cats'=>$cats], ['posts'=>$posts]);
    }

     public function about()
    {
        return view('frontend.about');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function sendMessage()
    {
        sleep(2);
        $data = $_GET;
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table('contacts')->insert($data);

        $output = 'Thank you for your message. We will contact you shortly';
        return response ($output);
    }

    public function sendSubscribe()
    {
        sleep(2);
        $data = $_GET;
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table('subs')->insert($data);

        $output = 'Thank you for subscribing. We will contact you shortly';
        return response ($output);
    }

    public function plan()
    {
        $diets = DB::table('diets')->get();

        return view('frontend.plan', ['diets'=>$diets]);
    }


    public function search(Request $request)
    {
        $search = $request->search;

        $menus = DB::table('foods')->where('title','like',"%".$search."%")->get();

        $cats = DB::table('foodcats')->get();

        

        return view('frontend.search',
            ['menus'=>$menus], 
            ['cats'=>$cats]
            
        );
    }

    public function map()
    {
        return view('frontend.map');
    }

    public function res()
    {
        $restaurant = DB::table('restaurants')->get();

        return view('frontend.restaurant', ['restaurant'=>$restaurant]);
    }

    public function menubuy()
    {
        $menus = DB::table('foods')->get();

        return view('frontend.menubuy', ['menus'=>$menus]);
    }

    public function payment()
    {
        return view('frontend.payment');
    }

}
