<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class AdminController extends Controller
{
    public function __construct(){


    }

    public function add()
    {
    	return view('backend.add');
    }

    public function addPost()
    {
    	$cats = DB::table('foodcats')->get();

        return view('backend.addpost', ['cats'=>$cats]);
    }

    public function addDiet()
    {
        return view('backend.adddietplan');
    }

    public function addRes()
    {
        return view('backend.addrestaurant');
    }

    public function deleteMenu($id)
    {
    	$data = DB::table('foods')->where('fid',$id)->delete();

    	return redirect()->back()->with('message','Menu deleted successfully');
    }

    public function deleteDiet($id)
    {
        $data = DB::table('diets')->where('did',$id)->delete();

        return redirect()->back()->with('message','Diet plan deleted successfully');
    }

    public function deleteRestaurant($id)
    {
        $data = DB::table('restaurants')->where('rid',$id)->delete();

        return redirect()->back()->with('message','Restaurant deleted successfully');
    }


    public function editMenu($id)
    {
        $data = DB::table('foods')->get();
        $maindata = DB::table('foods')->where('fid',$id)->first();

        if($maindata){
            return view('backend.edit', ['data'=>$data, 'maindata'=>$maindata]);
        }
        else{
            return redirect('allPost');
        }
    }

    public function editDiet($id)
    {
        $data = DB::table('diets')->get();
        $maindata = DB::table('diets')->where('did',$id)->first();

        if($maindata){
            return view('backend.editdietplan', ['data'=>$data, 'maindata'=>$maindata]);
        }
        else{
            return redirect('allDietplan');
        }
    }

    public function editRestaurant($id)
    {
        $data = DB::table('restaurants')->get();
        $maindata = DB::table('restaurants')->where('rid',$id)->first();

        if($maindata){
            return view('backend.editrestaurant', ['data'=>$data, 'maindata'=>$maindata]);
        }
        else{
            return redirect('allRestaurant');
        }
    }

    public function allPost()
    {
        $data = DB::table('foods')->get();

        return view('backend.allpost', ['data'=> $data]);
    }


    public function allDiet()
    {
        $data = DB::table('diets')->get();

        return view('backend.alldietplan', ['data'=> $data]);
    }

    public function allRes()
    {
        $data = DB::table('restaurants')->get();

        return view('backend.allrestaurant', ['data'=> $data]);
    }

    public function addPostcats()
    {
        $data = DB::table('foodcats')->get();

        return view('backend.addpostcategory', ['data'=> $data]);
    }

    public function editFc($id)
    {
        $data = DB::table('foodcats')->get();
        $maindata = DB::table('foodcats')->where('fcid',$id)->first();

        if($maindata){
            return view('backend.editcat', ['data'=>$data, 'maindata'=>$maindata]);
        }
        else{
            return redirect('allPost');
        }
    }

        public function deleteFc($id)
    {
        $cats = DB::table('foodcats')->where('fcid',$id)->delete();

        return redirect()->back()->with('message','Menu deleted successfully');
    }

    public function allContact()
    {
        $contact = DB::table('contacts')->get();

        return view('backend.allcontact', ['contact'=>$contact]);
    }

    public function allSubscribe()
    {
        $subscribe = DB::table('subs')->get();

        return view('backend.allsubscribe', ['subscribe'=>$subscribe]);
    }


    public function logAdmin()
    {
        return view('backend.login');
    }

    public function checklog(Request $request)
    {
        $this->validate($request, [
            'email'         =>  'required|email',
            'password'      =>  'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('allPost');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }


    }

    public function outAdmin()
    {
        Auth::logout();
        return redirect('logAdmin');
    }

}
