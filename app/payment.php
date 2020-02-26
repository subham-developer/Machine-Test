<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
   protected $table = 'mst_payment';
   protected $fillable = ['id','name','status','pay_description'];



    public static function getData($id=null){
    	$query = payment::query();
		  if(!empty($id)){
			 $query->where('id',$id);
		  }
    	return $query->where('status',1)->orderBy('id','DESC')->get();
    }

   public static function upsert($data){
    	$data = payment::updateOrCreate(
    	 [
	        'id' => $data['id']
   		 ],
    	 [
	        'status' => $data['status'],
			'name' =>$data['name'],
			'pay_description' =>$data['pay_description']	        
   		 ]
		);
		    return $data;
    }

    public static function softDelete($data){
    	$data = payment::updateOrCreate(
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
