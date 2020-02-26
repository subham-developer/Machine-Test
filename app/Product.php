<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','name','category_id','status','price'];


    public static function getData(){
      	$query = Product::query();
      	$query->leftjoin('mst_category as mstc','product.category_id', '=', 'mstc.id');
      	$query->where('product.status','=',1);
      	$query->select('product.*','mstc.name as cat_name');
        return $query->paginate(10);
        
    }

    public static function getIdData($productId=null){
        $query = Product::query();
        $query->leftjoin('mst_category as mstc','product.category_id', '=', 'mstc.id');
        $query->where('product.status','=',1);
        if(!empty($productId)){
        $query->where('product.id','=',$productId);
        }
        $query->select('product.*','mstc.name as cat_name');
       
       return $query->get()->toArray();
    }

    public static function upsert($data){

    	Product::updateOrCreate(
    		 [
	          'id' => $data['id']
	   		 ],
	    	 [
		        'status' => $data['status'],
		        'name' =>$data['name'],
            'price' =>floatval($data['price']),
		        'category_id' => $data['category_id']        
	   		 ]
		);
    }

    public static function formattingData($data){
      $Array =  array();
      $res = array();
      if(!empty($data)){
       $Array = $data->toarray();
      }
      $productLike = new \App\Productlike;
      if(!empty($Array['data'])){
        $res =  $Array['data'];
      }
      $finalArray = array();
      foreach($res as $k=>$v){ 
          if(!empty($v['id'])){
             $res = $productLike::getData($v['id']);
             $v['like'] = $res['like'];
             $v['count'] = $res['count'];

          }
        $finalArray[] = $v;  
      }
       return $finalArray;

    }

    public static function softDelete($data){
      $data = Product::updateOrCreate(
       [
          'id' => $data['id']
       ],
       [
          'status' => 0,
                    
       ]
    );
    return $data;
    }
}
