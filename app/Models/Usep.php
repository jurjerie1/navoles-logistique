<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usep extends Model
{
    use HasFactory;

    protected $fillable = [
        'entreprise_id',
        'user_id',
        'role',

    ];
    public function entreprise(){
        return $this->hasMany(Entreprise::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }



}
