<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades_alimenticias extends Model
{
    use HasFactory;
    public function saveNewProperty($calorias,$grasas,$proteina,$calcio)
    {
        try {
            $this->calorias = $calorias;
            $this->grasas = $grasas;
            $this->proteina = $proteina;
            $this->calcio = $calcio;
            $this->save();
            return true;
        } catch (Exception $e) {
            log::error("No se pudo guardar la nueva propiedad alimenticia: ". $e);
            return false();
        }
    }
}
