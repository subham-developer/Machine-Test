<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
	

class ServicesOfferedController extends Controller
{
   
   public function __construct(){
      $this->middleware('auth');
   }

   public function index(Request $request){
        $input = $request->all();
        $data = services::getData();
        return view('services.services',compact('data'));
   }

   public function addServices($id=null){
   	    $data  = array();
		if(!empty($id)){
        $data = services::getData($id);
       }
      
        return view('services.addServices',compact('data'));

   }

   public function servicesUpsert(Request $request){
     $validatedData = $request->validate([
       
        'name' => 'required'
       ],
       [
           'name.required' => 'please fill Services offered'
      ]);
   	    $input = $request->all();
   	    $data = services::upsert($input);
   	    return redirect()->back()->with('message', 'upserted successfully');
   }

    public function deleteServices(Request $request){
   	    $input = $request->all();
   	    $data = services::softDelete($input);
   	    if(!empty($data->id)){
   	    	return 1;
   	    }else{
   	    	return 0;
   	    }
   }
}
