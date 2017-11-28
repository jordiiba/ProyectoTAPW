<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use View;

class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupones = DB::table('cupon')->orderBy('id', 'asc')->get();
        $data=array();
        $data['cupones'] = $cupones;
        return View::make('cupon.muestra')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('cupon.insertar');
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

        if (!$request->has('clave')) {
            $response->success =false;
            $response->mensaje = 'no se recibio clave';
            return JsonResponse::create($response);
        }
        if (!$request->has('descripcion')) {
            $response->success =false;
            $response->mensaje = 'no se recibio descripcion';
            return JsonResponse::create($response);
        }
        if (!$request->has('descuento')) {
            $response->success =false;
            $response->mensaje = 'no se recibio descuento';
            return JsonResponse::create($response);
        }

        DB::table('cupon')
            ->insert([
                'clave' => $request->clave,
                'descripcion' => $request->descripcion,
                'descuento' => $request->descuento]
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
        $cupon = DB::table('cupon')->where('id', '=', $id)->first();
        return JsonResponse::create($cupon);
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
        $cupon = DB::table('cupon')->where('id', '=', $id)->first();
        return View::make('cupon.actualizar')->with(['cupon' => $cupon]);
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

        if (!$request->has('clave')) {
            $response->success =false;
            $response->mensaje = 'no se recibio clave';
            return JsonResponse::create($response);
        }
        if (!$request->has('descripcion')) {
            $response->success =false;
            $response->mensaje = 'no se recibio descripcion';
            return JsonResponse::create($response);
        }
        if (!$request->has('descuento')) {
            $response->success =false;
            $response->mensaje = 'no se recibio descuento';
            return JsonResponse::create($response);
        }

        $cupon = DB::table('cupon')->where('id', '=', $id)->first();
        if(!$cupon){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }

        DB::table('cupon')
            ->where('id', '=', $id)
            ->update(
                ['clave' => $request->clave,'descripcion' => $request->descripcion,'descuento' => $request->descuento]
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
        $cupon = DB::table('cupon')->where('id', '=', $id)->first();
        if(!$cupon){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('cupon')
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
        $cupon = DB::table('cupon')->where('id', '=', $id)->first();
        return View::make('cupon.borrar')->with(['cupon' => $cupon]);
    }
}
