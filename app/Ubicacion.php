<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public function inventario()
    {
        return $this->belongsToMany('App\Inventario');
    }
}
