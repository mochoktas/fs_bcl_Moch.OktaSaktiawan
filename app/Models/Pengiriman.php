<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pengiriman extends Model
{
    //
    protected $table = 'pengiriman';
    protected $primaryKey = 'nomor_pengiriman';
    public $timestamps = false;
    protected $fillable = [
        'tanggal_pengiriman',
        'lokasi_asal',
        'lokasi_tujuan',
        'status_pengiriman',
        'nomor_armada'
    ];
    public function armada(): BelongsTo
    {
        return $this->belongsTo(Armada::class);
    }
    public function detail_pengiriman(): HasMany
    {
        return $this->hasMany(Detail_Pengiriman::class);
    }
}
