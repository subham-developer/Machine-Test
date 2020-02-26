<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productlike extends Model
{
		 protected $table = 'product_like';
		 protected $fillable = ['product_id','user_id','flag'];

		 public static function getData($productID)
		 {
		 	$res = array();
		 	$like = 0;
		 	$query = Productlike::query();
		 	$query->where('product_id',$productID);
		 	$query->where('flag',1);
		 	$count = $query->count();
			$q1 = $query;
		 	$q1->where('user_id',\Auth::id());
		 	$q1res = $q1->get()->toArray();
		 	if(!empty($q1res)){
		 		$like = 1;
		 	}
		 	$res['count'] = $count;
		 	$res['like'] = $like;
		 	return $res;
		 }

		 public static function upsert($data){
		 	$res = Productlike::updateOrCreate(
    		 [
	          'product_id' => $data['id'],
	          'user_id' => \Auth::id()
	   		 ],
	    	 [
		        'flag' => $data['data_attr']
		    ]
		);
    	if(!empty($res->id))
    	{
    		return 1;
    	}else{
    		return 0;
    	}
    }
}
