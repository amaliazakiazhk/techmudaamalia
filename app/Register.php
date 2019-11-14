<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $fillable = ['user_id','id_program','nama_donatur','tlp', 'no_ktp','email','harga','password'];

    public function programs(){
    	return $this->belongsToMany('App\Program');
    }
   
}
