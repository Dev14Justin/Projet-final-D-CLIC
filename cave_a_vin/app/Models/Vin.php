<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{
    protected $fillable =[
        "nom",
        "prix",
        "description",
        "quantite",
        "image",
    ];
}