<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    protected $fillable = [
        'url_origine',
    ];

    /**
     * relation entre le lien et l'utilisateur
     * 
     */

    public function user(){
        return $this->belongsTo(User::class);
    }
}
