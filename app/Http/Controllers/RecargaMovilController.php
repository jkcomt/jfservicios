<?php

namespace App\Http\Controllers;

use App\RecargaMovil;
use Illuminate\Http\Request;

class RecargaMovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recargas = RecargaMovil::where(['estado'=>'Habilitado'])->paginate(10);
        return view('telfmovil.recargas.index',compact('recargas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $json = $request->input('json',null);
        $data = json_decode($json);

        $recargaMovil = new RecargaMovil();
        $recargaMovil->tipo_servicio = $data->tipo_servicio;
        $recargaMovil->cliente_nombre = $data->cliente_nombre;
        $recargaMovil->num_contacto =  $data->num_contacto;
        $recargaMovil->operador =  $data->operador;
        $recargaMovil->num_recarga =  $data->num_recarga;
        $recargaMovil->monto_recarga =  $data->monto_recarga;
        $recargaMovil->estado = 'Habilitado';
        $recargaMovil->estado_servicio = 'recibido';

        $recargaMovil->save();

        return response()->json(['message' => 'registro exitoso','status'=>200]);
      /*  if($request->json()){

            //$tipo_servicio = $data->tipo_servicio;



        }*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
