<?php
/*CARLOS ANDRES PINEDA (3210359) - TAREA 6: CREACION DE MIDDLEWARE*/
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Validateapi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->header('authKey') == '2304')
        {
            Log::info('Middleware detected a request to ' . $request->path());
            return $next($request);
        }
        else{

            return response()->json([
                'success' => 'False',
                'message' => 'Error: Validation failure',
            ], 422);
        }
    }
}