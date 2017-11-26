<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function get_pais()
    {
        $pais = DB::table('pais')->get();

        return view('pais.nombre', ['paises' => $pais]);
    }
}
