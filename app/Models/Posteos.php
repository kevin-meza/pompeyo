<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posteos extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_post';
    protected $fillable = [
        'id_user',
        'imagen',
        'password',
    ];
}
