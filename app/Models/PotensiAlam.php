<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiAlam extends Model
{
    protected $guarded = ['id'];
    protected $table = 'potensi_alam';

    public function daerah() {
        return $this->hasMany(Daerah::class);
    }

    public function kategori() {
        return $this->belongsTo(KategoriPotensi::class, 'id_kategori', 'id');
    }
}
