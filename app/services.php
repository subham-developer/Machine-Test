<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
   protected $table = 'mst_services';
   protected $fillable = ['id','name','status','ser_description'];



    public static function getData($id=null){
    	$query = services::query();
		  if(!empty($id)){
			 $query->where('id',$id);
		  }
    	return $query->where('status',1)->orderBy('id','DESC')->get();
    }

   public static function upsert($data){
    	$data = services::updateOrCreate(
    	 [
	        'id' => $data['id']
   		 ],
    	 [
	        'status' => $data['status'],
			'name' =>$data['name'],
			'ser_description' =>$data['ser_description']	        
   		 ]
		);
		    return $data;
    }

    public static function softDelete($data){
    	$data = services::updateOrCreate(
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
