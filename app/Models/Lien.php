<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    protected $fillable = [
        'user_id',
        'url_origine',
        'code',
    ];

    /**
     * relation entre le lien et l'utilisateur
     * 
     */

    public function users(){
        return $this->hasMany(User::class);
    }
}
