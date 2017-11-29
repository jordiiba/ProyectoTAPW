<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('cliente')->orderBy('cliente.id', 'asc')
            ->join('ciudad', 'ciudad.id', '=', 'cliente.id_ciudad')
            ->select('cliente.*', 'ciudad.nombre as ciudad')->get();
        $data = array();
        $data['clientes'] = $clientes;
        return View::make('cliente.muestra')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ciudades = DB::table('ciudad')->orderBy('id', 'asc')->get();
        $data = array();
        $data['ciudades'] = $ciudades;
        return View::make('cliente.insertar')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('entra al metodo');
        $response = new \stdClass();

        if (!$request->has('usuario')) {
            $response->success =false;
            $response->mensaje = 'no se recibio usuario';
            return JsonResponse::create($response);
        }
        if (!$request->has('contrasena')) {
            $response->success =false;
            $response->mensaje = 'no se recibio contrasena';
            return JsonResponse::create($response);
        }
        if (!$request->has('nombres')) {
            $response->success =false;
            $response->mensaje = 'no se recibio nombres';
            return JsonResponse::create($response);
        }
        if (!$request->has('apellidos')) {
            $response->success =false;
            $response->mensaje = 'no se recibio apellidos';
            return JsonResponse::create($response);
        }
        if (!$request->has('correo')) {
            $response->success =false;
            $response->mensaje = 'no se recibio correo';
            return JsonResponse::create($response);
        }
        if (!$request->has('compania')) {
            $response->success =false;
            $response->mensaje = 'no se recibio compania';
            return JsonResponse::create($response);
        }
        if (!$request->has('rfc')) {
            $response->success =false;
            $response->mensaje = 'no se recibio rfc';
            return JsonResponse::create($response);
        }
        if (!$request->has('telefono')) {
            $response->success =false;
            $response->mensaje = 'no se recibio telefono';
            return JsonResponse::create($response);
        }
        if (!$request->has('direccion')) {
            $response->success =false;
            $response->mensaje = 'no se recibio direccion';
            return JsonResponse::create($response);
        }
        if (!$request->has('codigo_postal')) {
            $response->success =false;
            $response->mensaje = 'no se recibio codigo_postal';
            return JsonResponse::create($response);
        }
        if (!$request->has('id_ciudad')) {
            $response->success =false;
            $response->mensaje = 'no se recibio ciudad';
            return JsonResponse::create($response);
        }


        DB::table('cliente')
            ->insert(
                ['usuario' => $request->usuario,
                    'contrasena' => $request->contrasena,
                    'nombres' => $request->nombres,
                    'apellidos' => $request->apellidos,
                    'correo' => $request->correo,
                    'compania' => $request->compania,
                    'rfc' => $request->rfc,
                    'telefono' => $request->telefono,
                    'direccion' => $request->direccion,
                    'codigo_postal' => $request->codigo_postal,
                    'id_ciudad' => $request->id_ciudad]
            );

        $response->success = true;
        return JsonResponse::create($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        return JsonResponse::create($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        $ciudades = DB::table('ciudad')->orderBy('id', 'asc')->get();
        return View::make('cliente.actualizar')->with(['cliente' => $cliente])->with(['ciudades' => $ciudades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $response = new \stdClass();

        if (!$request->has('usuario')) {
            $response->success =false;
            $response->mensaje = 'no se recibio usuario';
            return JsonResponse::create($response);
        }
        if (!$request->has('contrasena')) {
            $response->success =false;
            $response->mensaje = 'no se recibio contrasena';
            return JsonResponse::create($response);
        }
        if (!$request->has('nombres')) {
            $response->success =false;
            $response->mensaje = 'no se recibio nombres';
            return JsonResponse::create($response);
        }
        if (!$request->has('apellidos')) {
            $response->success =false;
            $response->mensaje = 'no se recibio apellidos';
            return JsonResponse::create($response);
        }
        if (!$request->has('correo')) {
            $response->success =false;
            $response->mensaje = 'no se recibio correo';
            return JsonResponse::create($response);
        }
        if (!$request->has('compania')) {
            $response->success =false;
            $response->mensaje = 'no se recibio compania';
            return JsonResponse::create($response);
        }
        if (!$request->has('rfc')) {
            $response->success =false;
            $response->mensaje = 'no se recibio rfc';
            return JsonResponse::create($response);
        }
        if (!$request->has('telefono')) {
            $response->success =false;
            $response->mensaje = 'no se recibio telefono';
            return JsonResponse::create($response);
        }
        if (!$request->has('direccion')) {
            $response->success =false;
            $response->mensaje = 'no se recibio direccion';
            return JsonResponse::create($response);
        }
        if (!$request->has('codigo_postal')) {
            $response->success =false;
            $response->mensaje = 'no se recibio codigo_postal';
            return JsonResponse::create($response);
        }
        if (!$request->has('id_ciudad')) {
            $response->success =false;
            $response->mensaje = 'no se recibio ciudad';
            return JsonResponse::create($response);
        }

        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        if(!$cliente){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }

        DB::table('cliente')
            ->where('id', '=', $id)
            ->update(
                ['usuario' => $request->usuario,
                    'contrasena' => $request->contrasena,
                    'nombres' => $request->nombres,
                    'apellidos' => $request->apellidos,
                    'correo' => $request->correo,
                    'compania' => $request->compania,
                    'rfc' => $request->rfc,
                    'telefono' => $request->telefono,
                    'direccion' => $request->direccion,
                    'codigo_postal' => $request->codigo_postal,
                    'id_ciudad' => $request->id_ciudad]
            );

        $response->success = true;
        return JsonResponse::create($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $response = new \stdClass();
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        if(!$cliente){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('cliente')
            ->where('id', '=', $id)
            ->delete();

        $response->success = true;
        return JsonResponse::create($response);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $cliente = DB::table('cliente')->where('id', '=', $id)->first();
        return View::make('cliente.borrar')->with(['cliente' => $cliente]);
    }
}
