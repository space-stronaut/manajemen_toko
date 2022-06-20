<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function pembeli(){
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id');
    }
}
