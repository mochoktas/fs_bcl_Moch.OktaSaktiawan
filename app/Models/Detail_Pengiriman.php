<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Detail_Pengiriman extends Model
{
    //
    protected $table = 'detail_pengiriman';
    public $timestamps = false;
    protected $fillable = [
        'nomor_pengiriman',
        'id_barang',
    ];
    public function pengiriman(): BelongsTo
    {
        return $this->belongsTo(Pengiriman::class);
    }
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
}
