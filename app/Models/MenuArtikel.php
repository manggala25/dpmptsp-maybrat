<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuArtikel extends Model
{
    protected $table = 'artikelpage';
    protected $guarded = ['id'];
    use HasFactory;
}
