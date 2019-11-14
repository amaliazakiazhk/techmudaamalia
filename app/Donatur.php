<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donaturs';
    protected $fillable = ['id_donatur','nama_donatur', 'tlp', 'jml_donasi', 'no_rek','jns_bayar','email' ,'pass','programs_id_program'];
   
   
}
