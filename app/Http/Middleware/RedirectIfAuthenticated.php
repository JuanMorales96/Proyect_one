<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\clientes;
use App\Models\empleados;
use Illuminate\Database\Eloquent\collection;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if($request->get('password_confirmation')){
            return redirect('/login');
        }
        else{
            try {
                /* ------------------------------------------------------------------------------------------------------------------- */
            /* Se optiene el email registrado en el login */
            $emailUser = $request->get('email');
            /* Se crea consulta para determinar el id de ese email */
            $selectID = User::select('id')->where('email',$emailUser)->get('id');
            /* Se guarda el id en un json */
            $idUserJson = json_decode($selectID,true);
            /* El valor absoluto del json se guarda en una variable*/
            if($idUserJson)
            {
                $idUser = $idUserJson[0]['id'];
            //dd($idUserJson);

                /* -----------------------------------------------------SQL cliente------------------------------------------------ */
            /* Se valida la existencia del usuario en la tabla cliente */
                $existUserClientNameSQL = User::select('email as user','first_name')
                    ->join('clientes','users.id', '=', 'clientes.fk_user')
                    ->where('users.id', $idUser)
                    ->get();
                $existUserClient = json_decode($existUserClientNameSQL,true);
                //dd($existUserClient);



            /* --------------------------------------------------------SQL empleado---------------------------------------------- */
            /* se valida la existencia del usuario en la tabla empleados */
                $existUserEmpleadoNameSQL = User::select('email as user','first_name')
                    ->join('empleados','users.id', '=', 'empleados.fk_user')
                    ->where('users.id', $idUser)
                    ->get();
                $existUserEmpleado = json_decode($existUserEmpleadoNameSQL,true);



            /* --------------------------------------------Definicion de URL----------------------------------------------------- */

                if($existUserClient)
                {
                    return redirect('/dashboard/clientes')->with($existUserClient);
                    //dd('tengo un dato de clientes');
                }
                else if($existUserEmpleado)
                {
                    return redirect('/dashboard/empleados')->with($existUserEmpleado);
                    //dd('tengo un dato de empleados');
                }
                else
                {
                    dd('no tengo nada de nadie, soy una prueba');
                }
            }
            } catch (\Throwable $th) {
                dd ('error: ', $th);
            }
            //dd($request);
        }
        /* -------------------------------------------------Ni idea que hace-------------------------------------------------- */
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        /* ----------------------------------------------------------------------------------------------------------------------- */


        /* ------------------------------------------------------------------------------------------------------------------- */
        return $next($request);

    }
}
