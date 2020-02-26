<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
	

class PaymentModeController extends Controller
{
   
   public function __construct(){
      $this->middleware('auth');
   }

   public function index(Request $request){
        $input = $request->all();
        $data = payment::getData();
        return view('payment.payment',compact('data'));
   }

   public function addPayment($id=null){
   	    $data  = array();
		if(!empty($id)){
        $data = payment::getData($id);
       }
      
        return view('payment.addPayment',compact('data'));

   }

   public function cpaymentUpsert(Request $request){
     $validatedData = $request->validate([
       
        'name' => 'required'
       ],
       [
           'name.required' => 'please fill Payment Mode Name'
      ]);
   	    $input = $request->all();
   	    $data = payment::upsert($input);
   	    return redirect()->back()->with('message', 'upserted successfully');
   }

    public function deletePayment(Request $request){
   	    $input = $request->all();
   	    $data = payment::softDelete($input);
   	    if(!empty($data->id)){
   	    	return 1;
   	    }else{
   	    	return 0;
   	    }
   }
}
