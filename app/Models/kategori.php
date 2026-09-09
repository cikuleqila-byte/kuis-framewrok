<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Informasi;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function informasis(): HasMany
    {
        return $this->hasMany(Informasi::class);
    }
}