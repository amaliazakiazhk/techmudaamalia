<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable= ['id_program','nama_program','deskripsi'];

    public function registers(){
    	return $this->belongsToMany('\App\Register');
    }
}
