<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complementos extends Model
{
    use HasFactory;
    public function saveNewComplemt($nombre, $descripcion)
    {
        try {
            $this->nombre = $nombre;
            $this->description = $descripcion;
            $this->save();
            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar el nuevo complemento: ". $e);
            return false();
        }
    }
}
