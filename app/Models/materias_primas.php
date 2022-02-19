<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materias_primas extends Model
{
    use HasFactory;
    public function saveNewRawMaterials($nombreMateriaPrima, $descripcion)
    {
        try {
            $this->nombre = $nombreMateriaPrima;
            $this->descripcion = $descripcion;
            $this->save();
            return true;
        } catch (Exeption $e) {
            log::error("No se pudo guardar la nueva materia prima: ". $e);
            return false();
        }
    }
}
