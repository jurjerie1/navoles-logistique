<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise_ig extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'villes_id',
        

    ];

    public function villes(){
        return $this->belongsTo(Ville::class);
    }
}
