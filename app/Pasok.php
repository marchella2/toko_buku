<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table = 'tbl_pasok';
    protected $fillable = [
        'id_distributor', 'id_buku', 'jumlah', 'tanggal'
    ];
    protected $dates = ['tanggal'];

    public function Distributor()
    {
        return $this->belongsTo(Distributor::class, 'id_distributor');
    }

    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
