<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Pegawai;
use App\Models\Instansi;
use App\Models\Perjalanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surats';
    protected $guarded = 'id';
    protected $fillable = [
        'user_id',
        'pegawai_id',
        'perjalanan_id',
        'status_id',
        'nomor',
        'uraian'
    ];

    /**
     * Get the user that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the pegawai that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    

    /**
     * Get the perjalanan that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perjalanan(): BelongsTo
    {
        return $this->belongsTo(Perjalanan::class);
    }

    /**
     * Get the pangkat that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pangkat(): BelongsTo
    {
        return $this->belongsTo(Pangkat::class);
    }

    /**
     * Get the jabatan that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    /**
     * Get the status that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the instansi that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    
}
