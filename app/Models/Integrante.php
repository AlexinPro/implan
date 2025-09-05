<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    protected $fillable = ['consejo_id', 'nombre', 'cargo', 'correo'];

    public function consejo()
    {
        return $this->belongsTo(Consejo::class);
    }
}
