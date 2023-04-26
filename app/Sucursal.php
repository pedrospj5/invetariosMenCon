<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public function inventario()
    {
        return $this->belongsToMany('App\Inventario');
    }
}
