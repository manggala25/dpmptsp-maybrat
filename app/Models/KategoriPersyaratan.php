<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPersyaratan extends Model
{
    protected $table = 'kategori_persyaratan';
    protected $guarded = ['id'];
    use HasFactory;

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class, 'kategori_persyaratan_id');
    }
}
