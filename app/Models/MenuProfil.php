<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuProfil extends Model
{
    protected $table = 'profilpage';
    protected $guarded = ['id'];
    use HasFactory;
}
