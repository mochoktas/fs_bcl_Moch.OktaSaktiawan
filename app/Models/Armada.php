<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Armada extends Model
{
    //

    protected $table = 'armada';
    protected $primaryKey = 'nomor_armada';
    public $timestamps = false;
    protected $fillable = [
        'nomor_armada',
        'ketersediaan',
        'kapasitas_muatan',
        'id_jenis_kendaraan',
        'longitude',
        'latitude'
    ];
    public function jenis_kendaraan(): BelongsTo
    {
        return $this->belongsTo(Jenis_Kendaraan::class);
    }

    public function pengiriman(): HasMany
    {
        return $this->hasMany(Pengiriman::class);
    }
}
