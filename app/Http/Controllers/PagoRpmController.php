<?php

namespace App\Http\Controllers;

use App\PagoRpm;
use Illuminate\Http\Request;

class PagoRpmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rpms = PagoRpm::where(['estado'=>'Habilitado'])->paginate(10);
        return view('telfmovil.rpm.index',compact('rpms'));
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
        $json = $request->input('json',null);
        $data = json_decode($json);

        $pagoRpm = new PagoRpm();
        $pagoRpm->tipo_servicio = $data->tipo_servicio;
        $pagoRpm->cliente_nombre = $data->cliente_nombre;
        $pagoRpm->num_contacto =  $data->num_contacto;
        $pagoRpm->operador =  $data->operador;
        $pagoRpm->num_rpm =  $data->num_rpm;
        $pagoRpm->estado = 'Habilitado';
        $pagoRpm->estado_servicio = 'recibido';

        $pagoRpm->save();

        return response()->json(['message' => "registro exitoso",'status'=>200]);
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
