<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'dVille',
        'dEntreprise',
        'aPays',
        'dPays',
        'aVille',
        'aEntreprise',
        'distence',
        'reveue_tt',
        'essence',
        'peage',
        'ammende',
        'autre',
        'commentaire',
        'user_id',
        'status',
        'entreprise_id',
        'justification',
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
        
    }
    public function entreprise(){
        
        return $this->hasMany(Entreprise::class);
        
    }
}
