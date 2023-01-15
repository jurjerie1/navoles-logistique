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
        'entreprise_id',
    ];
}
