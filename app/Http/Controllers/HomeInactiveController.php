<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos_procesados;

class HomeInactiveController extends Controller
{
    public function HomeInactive(){
        $productoProcesado = productos_procesados::get();
        return view('auth.HomePublic')->with('HomeInactive', $productoProcesado);
    }
}
