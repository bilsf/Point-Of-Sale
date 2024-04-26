<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected  $primaryKey = 'slug';
    protected $fillable = [
        'nama_barang',
        'nama_merek',
        // 'avatar',
        'nama_distributor',
        'harga_barang',
        'harga_beli',
        'stok',
        'tgl_masuk',
        'petugas',
    ];
//     public function detailBarang()
// {
//     return has('App/Home','stok');
// }
/**
 * Get the user associated with the Barang
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
    public function detailBarang(): HasOne
    {
        return $this->hasOne(Barang::class, 'nama_barang','stok');
    }
}
