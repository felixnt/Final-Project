<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class crudController extends Controller
{
    public function insertData(){
    	$data = Input::except('_token','submit');
    	$tbl = decrypt($data['tbl']);
    	unset ($data['tbl']);


    	if(!empty($data['picture'])){
  		if(Input::hasFile('picture')){
   		$data['picture'] = $this->upload($data['picture'], $tbl);
  		}
	}  

      if(Input::has('title')){
        $data['slug'] = $this->slug($data['title']);
      }

    	$data['created_at'] = date('Y-m-d H:i:s');
    	DB::table($tbl)->insert($data);
    	session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }
    
    private function upload($image,$tbl){
  	$name = $image->getClientOriginalName();
  	$newName = date('ymdgis').$name;
  	$image->move(public_path().'/'. $tbl ,$newName);
  	return $newName;
	 } 

    private function slug($string){
      $string = strtolower(trim($string));
      $string = preg_replace('/\s+/', '-', $string);
      $string = preg_replace('/[^a-z0-9-]]/', '-', $string); 
      $string = preg_replace('/-+/', '-', $string);

      return rtrim($string, '-');
    }

    public function updateMenu(){
      $data = Input::except('_token','submit');
      $tbl = decrypt($data['tbl']);
      unset ($data['tbl']);


      if(!empty($data['picture'])){
      if(Input::hasFile('picture')){
      $data['picture'] = $this->upload($data['picture'], $tbl);
      }
  }  

      $data['updated_at'] = date('Y-m-d H:i:s');
      DB::table($tbl)->where(key($data),reset($data))->update($data);
      
      session::flash('message','Data updated successfully!!!');
        return redirect()->back();
    }
}
