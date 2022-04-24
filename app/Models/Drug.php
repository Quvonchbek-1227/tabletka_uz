<?php

namespace App\Models;

use App\Models\Pharmacy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manual',
        'img',
        'unit',
        'description',
    ];

    public function pharmacies(){
        return $this->belongsToMany(Pharmacy::class,'drug_pharmacies');
    }
}
