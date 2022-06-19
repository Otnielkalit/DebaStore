<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'link'
    ];

    // public function pesanan_detail()
    // {
    //     return $this->belongTo('App\PesananDetail', 'barang_id', 'id');
    // }

}
