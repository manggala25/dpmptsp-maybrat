<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDinas extends Model
{
    use HasFactory;

    protected $table = 'profile_dinas';
    protected $guarded = ['id'];

}
