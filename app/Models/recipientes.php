<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipientes extends Model
{
    use HasFactory;
    public function guardarNuevoRecipiente($nombreRecipiente, $descripcion)
    {
        dd($this);
        try {
            $this->nombre = $nombreRecipiente;
            $this->descripcion = $descripcion;
            $this->save();

            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar el nuevo recipiente: ". $e);
            return false();
        }
    }
}
