<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    protected $table = 'persyaratan';
    protected $guarded = ['id'];
    use HasFactory;
    
    public function perizinan()
    {
        return $this->belongsTo(Perizinan::class);
    }
    public function kategoriPersyaratan()
    {
        return $this->belongsTo(KategoriPersyaratan::class);
    }
    public function kategori()
    {
        return $this->belongsTo(KategoriPersyaratan::class, 'kategori_persyaratan_id');
    }
}
