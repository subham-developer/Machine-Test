<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
	

class CategoryController extends Controller
{
   
   public function __construct(){
      $this->middleware('auth');
   }

   public function index(Request $request){
        $input = $request->all();
        $data = category::getData();
        return view('category.category',compact('data'));
   }

   public function addCategory($id=null){
   	    $data  = array();
		if(!empty($id)){
        $data = category::getData($id);
       }
      
        return view('category.addCategory',compact('data'));

   }

   public function categoryUpsert(Request $request){
     $validatedData = $request->validate([
       
        'name' => 'required'
       ],
       [
           'name.required' => 'please fill category'
      ]);
   	    $input = $request->all();
   	    $data = category::upsert($input);
   	    return redirect()->back()->with('message', 'upserted successfully');
   }

    public function deleteCategrory(Request $request){
   	    $input = $request->all();
   	    $data = category::softDelete($input);
   	    if(!empty($data->id)){
   	    	return 1;
   	    }else{
   	    	return 0;
   	    }
   }
}
