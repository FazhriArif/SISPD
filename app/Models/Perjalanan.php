<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perjalanan extends Model
{
    use HasFactory;

    protected $table = 'perjalanans';
    protected $guarded = 'id';
    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'lama_perjalanan',
        'tempat_berangkat',
        'tempat_tujuan',
        'anggaran',
        'tanggal_berangkat',
        'tanggal_kembali'
    ];

    /**
     * Get the kendaraan that owns the Perjalanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
