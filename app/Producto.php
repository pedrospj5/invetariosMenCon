<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
    public function inventario()
    {
        return $this->belongsToMany('App\Inventario');
    }
}
