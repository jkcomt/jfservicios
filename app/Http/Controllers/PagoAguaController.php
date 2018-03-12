<?php

namespace App\Http\Controllers;

use App\PagoAgua;
use Illuminate\Http\Request;

class PagoAguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $pagoAgua = new PagoAgua();
        $pagoAgua->tipo_servicio = $data->tipo_servicio;
        $pagoAgua->cliente_nombre = $data->cliente_nombre;
        $pagoAgua->num_contacto =  $data->num_contacto;
        $pagoAgua->num_suministro =  $data->num_suministro;
        $pagoAgua->monto_pagar =  $data->monto_pagar;
        $pagoAgua->estado = 'Habilitado';
        $pagoAgua->estado_servicio = 'recibido';

        $pagoAgua->save();

        return response()->json(['message' => "registro exitoso",'status'=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PagoAgua  $pagoAgua
     * @return \Illuminate\Http\Response
     */
    public function show(PagoAgua $pagoAgua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PagoAgua  $pagoAgua
     * @return \Illuminate\Http\Response
     */
    public function edit(PagoAgua $pagoAgua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PagoAgua  $pagoAgua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoAgua $pagoAgua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PagoAgua  $pagoAgua
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagoAgua $pagoAgua)
    {
        //
    }
}
