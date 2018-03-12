<?php

namespace App\Http\Controllers;

use App\Deposito;
use App\depositos;
use Illuminate\Http\Request;

class DepositosController extends Controller
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

        $deposito = new Deposito();
        $deposito->tipo_servicio = $data->tipo_servicio;
        $deposito->cliente_nombre = $data->cliente_nombre;
        $deposito->num_contacto =  $data->num_contacto;
        $deposito->entidad =  $data->entidad;
        $deposito->num_cuenta =  $data->num_cuenta;
        $deposito->num_deposito =  $data->num_deposito;
        $deposito->estado = 'Habilitado';
        $deposito->estado_servicio = 'recibido';

        $deposito->save();

        return response()->json(['message' => "registro exitoso",'status'=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\depositos  $depositos
     * @return \Illuminate\Http\Response
     */
    public function show(depositos $depositos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\depositos  $depositos
     * @return \Illuminate\Http\Response
     */
    public function edit(depositos $depositos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\depositos  $depositos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depositos $depositos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\depositos  $depositos
     * @return \Illuminate\Http\Response
     */
    public function destroy(depositos $depositos)
    {
        //
    }
}
