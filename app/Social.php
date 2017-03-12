<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
	protected $fillable =['facebook_user_id','access_token'];
    function user(){
    	return $this->belongsTo(User::class);
    }
}
