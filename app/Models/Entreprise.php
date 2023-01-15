<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_creation',
        'date_fin',

    ];

    // public function usep(){
    //     return $this->hasOne(Usep::class);
    // }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function mission(){
        return $this->hasMany(Mission::class);
    }
}
