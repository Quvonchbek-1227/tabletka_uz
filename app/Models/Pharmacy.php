<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'work_time',
        'region',
        'adress',
        'ip_adress',
        'telefon',
        'img',
        'description',
        'arentr',
        'id_seller'
    ];
}
