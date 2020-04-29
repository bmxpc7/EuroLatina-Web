<?php

namespace App\Http\Controllers;

use App\Maquina;
use Illuminate\Http\Request;

class maquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Maquina";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $maq = Maquina::all();
        return view("maquinas.create", compact("maq"));
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
        $maquina = new Maquina();
        $maquina->nombreMaquina = $request->txtMaquina;
        $maquina->idPieza= 1;
        $maquina->fechaInicio= $request->date_start;
        $maquina->fechaFin= $request->date_start;
        $maquina->cantidadTotal= $request->txtCantidad;
        $maquina->colorPrimario= $request->txtColor1;
        $maquina->colorSecundario= $request->txtColor2;
        $maquina->colorTerciario= $request->txtColor3;
        $maquina->fusion= $request->cmbFusion;
        $maquina->descripcion= $request->txtDescripcion;
        $maquina->save();
        return redirect()->route('maquina.index');
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
        return view("maquinas.update");
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
        return view("maquinas.delete");
    }
}
