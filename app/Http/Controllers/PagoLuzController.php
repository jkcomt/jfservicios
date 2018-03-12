<?php

namespace App\Http\Controllers;

use App\PagoLuz;
use Illuminate\Http\Request;

class PagoLuzController extends Controller
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

        $pagoLuz = new PagoLuz();
        $pagoLuz->tipo_servicio = $data->tipo_servicio;
        $pagoLuz->cliente_nombre = $data->cliente_nombre;
        $pagoLuz->num_contacto =  $data->num_contacto;
        $pagoLuz->num_suministro =  $data->num_suministro;
        $pagoLuz->monto_pagar =  $data->monto_pagar;
        $pagoLuz->estado = 'Habilitado';
        $pagoLuz->estado_servicio = 'recibido';

        $pagoLuz->save();

        return response()->json(['message' => "registro exitoso",'status'=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PagoLuz  $pagoLuz
     * @return \Illuminate\Http\Response
     */
    public function show(PagoLuz $pagoLuz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PagoLuz  $pagoLuz
     * @return \Illuminate\Http\Response
     */
    public function edit(PagoLuz $pagoLuz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PagoLuz  $pagoLuz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoLuz $pagoLuz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PagoLuz  $pagoLuz
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagoLuz $pagoLuz)
    {
        //
    }
}
