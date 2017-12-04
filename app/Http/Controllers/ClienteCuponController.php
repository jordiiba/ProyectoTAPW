<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use View;

class ClienteCuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientecupon = DB::table('clientecupon')->orderBy('clientecupon.id', 'asc')
            ->join('cliente', 'cliente.id', '=', 'clientecupon.id_cliente')
            ->join('cupon', 'cupon.id', '=', 'clientecupon.id_cupon')
            ->select('clientecupon.id','cliente.usuario', 'cupon.clave')->get();
        $data = array();
        $data['clientecupon'] = $clientecupon;
        return View::make('clientecupon.muestra')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = DB::table('cliente')->orderBy('id', 'asc')->get();
        $data = array();
        $data['clientes'] = $clientes;
        $cupones = DB::table('cupon')->orderBy('id', 'asc')->get();
        $data['cupones'] = $cupones;
        return View::make('clientecupon.insertar')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $response = new \stdClass();

        if (!$request->has('id_cliente')) {
            $response->success =false;
            $response->mensaje = 'No se recibio usuario';
            return JsonResponse::create($response);
        }
        if (!$request->has('id_cupon')) {
            $response->success =false;
            $response->mensaje = 'No se recibio cupon';
            return JsonResponse::create($response);
        }

        DB::table('clientecupon')
            ->insert(
                ['id_cliente' => $request->id_cliente,
                    'id_cupon' => $request->id_cupon]
            );

        $response->success = true;
        return JsonResponse::create($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Regresa los cupones para un cliente
        $cupon = DB::table('clientecupon')
            ->join('cupon', 'clientecupon.id_cupon', '=', 'cupon.id')
            ->select('cupon.*')
            ->where('clientecupon.id_cliente', '=', $id)->get();
        return JsonResponse::create($cupon);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $clientecupon = DB::table('clientecupon')->where('id', '=', $id)->first();
        if(!$clientecupon){
            $response->success =false;
            $response->mensaje = 'No existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('clientecupon')
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
        $data = array();
        $clientecupon = DB::table('clientecupon')
            ->join('cliente', 'clientecupon.id_cliente', '=', 'cliente.id')
            ->join('cupon', 'clientecupon.id_cupon', '=', 'cupon.id')
            ->select('clientecupon.id','cliente.usuario','cupon.clave')
            ->where('clientecupon.id', '=', $id)->first();
        $data['clientecupon'] = $clientecupon;
        return View::make('clientecupon.borrar')->with($data);
    }

}
