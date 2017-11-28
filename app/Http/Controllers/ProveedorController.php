<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use View;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedor')->orderBy('id', 'asc')->get();

        $data=array();
        $data['proveedores'] = $proveedores;
        return View::make('proveedor.muestra')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('proveedor.insertar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new \stdClass();

        if (!$request->has('nombre'))
        {
            $response->success =false;
            $response->mensaje = 'no se recibio nombre';
            return JsonResponse::create($response);
        }

        DB::table('proveedor')
            ->insert(
                ['nombre' => $request->nombre],
                ['direccion' => $request->direccion]
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
        $proveedores = DB::table('proveedor')->where('id', '=', $id)->first();
        return JsonResponse::create($proveedores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = DB::table('proveedor')->where('id', '=', $id)->first();
        return View::make('proveedor.actualizar')->with(['proveedor' => $proveedores]);
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
        $response = new \stdClass();

        if (!$request->has('nombre')) {
            $response->success =false;
            $response->mensaje = 'no se recibio nombre';
            return JsonResponse::create($response);
        }
        $proveedores = DB::table('proveedor')->where('id', '=', $id)->first();
        if(!$proveedores){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }

        DB::table('proveedor')
            ->where('id', '=', $id)
            ->update(
                ['nombre' => $request->nombre],
                ['direccion' => $request->direccion]
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

        $proveedores = DB::table('proveedor')->where('id', '=', $id)->first();
        if(!$proveedores){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('proveedor')
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
        $proveedores = DB::table('proveedor')->where('id', '=', $id)->first();
        return View::make('proveedor.borrar')->with(['proveedor' => $proveedores]);
    }
}
