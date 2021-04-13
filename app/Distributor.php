<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
   protected $table = 'tbl_distributor';

   protected $fillable = [
       'nama_distributor', 'alamat', 'telpon'
    ];
}
