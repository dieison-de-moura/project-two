<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $data = $request->all();
        if (!empty($data) && !empty($data['email'])) {
            $user = DB::select('select id, tipo_usuario from users where email = ?', [$data['email']]);

            if (!empty($user) && !empty($user[0]->tipo_usuario) && $user[0]->tipo_usuario == 'abrigo') {
                session()->push('tipo', $user[0]->tipo_usuario);
                session()->push('usuarioId', $user[0]->id);
            } elseif (!empty($user)) {
                session()->push('usuarioId', $user[0]->id);
            }
        }
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
