<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanPengajuan extends Model
{
    protected $table = 'tahapan_pengajuan';
    protected $guarded = ['id'];
    use HasFactory;
}
