<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Barang extends Model
{
    //
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;
    protected $fillable = [
        'nama_barang'
    ];

    public function detail_pengiriman(): HasMany
    {
        return $this->hasMany(Detail_Pengiriman::class);
    }
}
