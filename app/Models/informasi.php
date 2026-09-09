<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Kategori;

class Informasi extends Model
{
    protected $table = 'informasis';

    protected $fillable = [
        'kategori_id',
        'judul',
        'ringkasan',
        'isi',
        'sumber',
        'status'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}