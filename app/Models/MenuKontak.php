<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuKontak extends Model
{
    protected $table = 'kontakpage';
    protected $guarded = ['id'];
    use HasFactory;
}
