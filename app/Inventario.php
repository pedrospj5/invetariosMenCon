<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public function porductos()
    {
        return $this->belongsToMany('App\Producto');
    }
    public function sucursales()
    {
        return $this->belongsToMany('App\Sucursal');
    }
    public function ubicaciones()
    {
        return $this->belongsToMany('App\Ubicacion');
    }
}
