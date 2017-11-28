<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use View;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('producto')->orderBy('id', 'asc')->get();

        $data=array();
        $data['productos'] = $productos;
        return View::make('producto.muestra')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('producto.insertar');
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

        if (!$request->has('nombre'))
        {
            $response->success =false;
            $response->mensaje = 'no se recibio nombre';
            return JsonResponse::create($response);
        }

        DB::table('producto')
            ->insert(
                ['nombre' => $request->nombre],
                ['descripcion' => $request->descripcion],
                ['precio_venta' => $request->precio_vent],
                ['stock' => $request->stock],
                ['imagen' => $request->imagen],
                ['id_categoria' => $request->id_categoria]
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
        $producto = DB::table('producto')->where('id', '=', $id)->first();
        return JsonResponse::create($producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = DB::table('producto')->where('id', '=', $id)->first();
        return View::make('producto.actualizar')->with(['producto' => $producto]);
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

        if (!$request->has('nombre')) {
            $response->success =false;
            $response->mensaje = 'no se recibio nombre';
            return JsonResponse::create($response);
        }

        $producto = DB::table('producto')->where('id', '=', $id)->first();
        if(!$producto){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }

        DB::table('producto')
            ->where('id', '=', $id)
            ->update(
                ['nombre' => $request->nombre],
                ['descripcion' => $request->descripcion],
                ['precio_venta' => $request->precio_vent],
                ['stock' => $request->stock],
                ['imagen' => $request->imagen],
                ['id_categoria' => $request->id_categoria]
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

        $producto = DB::table('producto')->where('id', '=', $id)->first();
        if(!$producto){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('producto')
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
        $producto = DB::table('producto')->where('id', '=', $id)->first();
        return View::make('producto.borrar')->with(['producto' => $producto]);
    }
}
