<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    public function saveNewClient($nombres, $apellidos, $direccion, $telefono)
    {
        try {
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->save();
            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar el nuevo cliente: ". $e);
            return false();
        }
    }
}
