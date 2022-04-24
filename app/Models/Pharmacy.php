<?php

namespace App\Models;

use App\Models\Drug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function drugs(){
        $this->belongsToMany(Drug::class,'drug_pharmacies');
    }
}
