<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class hotel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $hotel = Hotel::find($request->route('id'));

        if ($hotel->chambres->count() < 3) {
            return response()->json([
                'message' => 'Le nombre de chambres doit être d\'au moins 3 pour supprimer une chambre.',
            ], 400);
        }

        return $next($request);
    }
}
