<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Services\AgeRouterService;

class ClasificarEdad
{
    public function handle(Request $request, Closure $next)
    {
        // 1) Si llega por POST, procesamos y creamos la sesión
        if ($request->isMethod('post')) {
            $request->validate([
                'nombre'   => 'required|string|max:100',
                'apellido' => 'required|string|max:100',
                'edad'     => 'required|integer|min:0|max:120',
            ]);

            $data = $request->only(['nombre', 'apellido', 'edad']);
            Persona::create($data);
            session(['edad' => $data['edad']]);

            return redirect(AgeRouterService::routeFor($data['edad']));
        }

        // 2) Si llega por GET a ruta protegida y NO hay sesión, redirigimos al error
        if ($request->isMethod('get') && ! session()->has('edad')) {
            return redirect()->route('error.edad');
        }

        // 3) En cualquier otro caso (GET con sesión) dejamos pasar
        return $next($request);
    }
}
