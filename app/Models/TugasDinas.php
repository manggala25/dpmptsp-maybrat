<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasDinas extends Model
{
    use HasFactory;
    protected $table = 'tugas_dinas';
    protected $guarded = ['id'];
}
