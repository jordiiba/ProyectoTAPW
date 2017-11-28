<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use View;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categoria')->orderBy('id', 'asc')->get();

        $data=array();
        $data['categorias'] = $categorias;
        return View::make('categoria.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('categoria.inserta');
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

        if (!$request->has('nombre')) {
            $response->success =false;
            $response->mensaje = 'no se recibio nombre';
            return JsonResponse::create($response);
        }

        DB::table('categoria')
            ->insert(
                ['nombre' => $request->nombre]
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
        //
        //$categoria = Categoria::find($id);
        //$categoria = Categoria::->first();
        $categoria = DB::table('categoria')->where('id', '=', $id)->first();
        //dd($categoria);
        return JsonResponse::create($categoria);
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
        $categoria = DB::table('categoria')->where('id', '=', $id)->first();
        return View::make('categoria.actualiza')->with(['categoria' => $categoria]);
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
        $categoria = DB::table('categoria')->where('id', '=', $id)->first();
        if(!$categoria){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }

        DB::table('categoria')
            ->where('id', '=', $id)
            ->update(
                ['nombre' => $request->nombre]
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

        $categoria = DB::table('categoria')->where('id', '=', $id)->first();
        if(!$categoria){
            $response->success =false;
            $response->mensaje = 'no existe el elemento con el id = '.$id;
            return JsonResponse::create($response);
        }
        DB::table('categoria')
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
        $categoria = DB::table('categoria')->where('id', '=', $id)->first();
        return View::make('categoria.borra')->with(['categoria' => $categoria]);
    }
}
