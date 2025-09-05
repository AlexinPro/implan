<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consejo extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function integrantes()
    {
        return $this->hasMany(Integrante::class);
    }
}
