<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $table = 'mst_category';
   protected $fillable = ['id','name','status','cat_description'];



    public static function getData($id=null){
    	$query = category::query();
		  if(!empty($id)){
			 $query->where('id',$id);
		  }
    	return $query->where('status',1)->orderBy('id','DESC')->get();
    }

   public static function upsert($data){
    	$data = category::updateOrCreate(
    	 [
	        'id' => $data['id']
   		 ],
    	 [
	        'status' => $data['status'],
			'name' =>$data['name'],
			'cat_description' =>$data['cat_description']	        
   		 ]
		);
		    return $data;
    }

    public static function softDelete($data){
    	$data = category::updateOrCreate(
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
