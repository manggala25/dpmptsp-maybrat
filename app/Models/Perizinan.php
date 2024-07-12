<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    protected $table = 'perizinan';
    protected $guarded = ['id'];
    use HasFactory;
    
    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class);
    }
}

