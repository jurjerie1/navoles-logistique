<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pays_id',
    ];

    public function pays(){
        return $this->belongsTo(Pays::class);

    }
    public function entreprises(){
        // return $this->belongsTo(Ville::class);
        return $this->hasMany(Entreprise_ig::class);

    }
}
