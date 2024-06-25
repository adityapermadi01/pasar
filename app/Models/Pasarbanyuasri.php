<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasarbanyuasri extends Model
{
    use HasFactory;
    protected $table = 'pasarbanyuasris';
    protected $primaryKey = 'id_pasarbanyuasri';
    protected $fillable =  [
        'tanggal',
        'kode',
        'harga',
        'stok',
        'id_barang',
        'id_pasarbanyuasri'
    ];
    public function databarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
