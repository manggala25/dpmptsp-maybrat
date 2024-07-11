<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamLayanan extends Model
{
    protected $table = 'jam_layanan';
    protected $guarded = ['id'];
    use HasFactory;
}
