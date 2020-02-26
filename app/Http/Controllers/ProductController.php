<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;

class ProductController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function index(Request $request){
      $input = $request->all();
      $product = Product::getData();
      $products= Product::formattingData($product);
     
      if(!empty($product)){
      $link = $product->links();
       }else{
       $link= '';
    }
      return view('product.product',compact('products','link'));
    }

  

   public function addProduct($id=null){
   	    $data  = array();
  		  if(!empty($id)){
          $data = Product::getData($id);
         }
       $category = category::getData();
   
        return view('product.addProduct',compact('data','category'));

   }

   public function productUpsert(Request $request){

      $validatedData = $request->validate([
        'category_id' => 'required',
        'price' => 'required',
        'name' => 'required'
       ],
       [
           'category_id.required' => 'please select category'
      ]);
   	    $input = $request->all();
        $data = Product::upsert($input);
   	    return redirect()->back()->with('message', 'upserted successfully');
   }

    public function deleteProduct(Request $request){
   	    $input = $request->all();
   	    $data = Product::softDelete($input);
   	    if(!empty($data->id)){
   	    	return 1;
   	    }else{
   	    	return 0;
   	    }
   }
}
