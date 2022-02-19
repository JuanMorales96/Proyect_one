<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    public function saveNewEmployed($nombres, $apellidos, $cargo, $cedula, $direccion, $telefono)
    {
        try {
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->cargo = $cargo;
            $this->cedula = $cedula;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->save();
            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar el nuevo empleado". $e);
            return false();
        }
    }
}
