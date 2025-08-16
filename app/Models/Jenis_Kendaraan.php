<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Jenis_Kendaraan extends Model
{
    //
    protected $table = 'jenis_kendaraan';
    protected $primaryKey = 'id_jenis_kendaraan';
    public $timestamps = false;
    protected $fillable = [
        'nama_jenis'
    ];

    public function armada(): HasMany
    {
        return $this->hasMany(Armada::class);
    }
}
