<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos_procesados extends Model
{
    use HasFactory;
    public function saveEndProduct($nombreProducto, $precio, $descripcion)
    {
        try {
            $this->nombre = $nombreProducto;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
            $this->save();
            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar el nuevo producto procesado: ". $e);
            return false();
        }
    }
}
