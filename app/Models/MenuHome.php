<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuHome extends Model
{
    protected $table = 'homepage';
    protected $guarded = ['id'];
    use HasFactory;
}
