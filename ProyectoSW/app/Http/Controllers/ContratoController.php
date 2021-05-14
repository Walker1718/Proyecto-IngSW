<?php

namespace App\Http\Controllers;

use App\Models\contrato;
use App\Models\usuario;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['contrato'] = contrato::paginate(5);
        return view('contrato.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosUsuarios = usuario::all();
        return view('contrato.create', compact('datosUsuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoContrato = request()->except('_token');
        contrato::insert($datoContrato);
        return redirect('contrato');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(contrato $contrato)
    {
        $datos['contrato'] = contrato::findOrFail($id_contrato);
        return view('contrato.show', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id_contrato)
    {
        $dato['contrato'] = contrato::findOrFail($id_contrato);
        return view('contrato.edit', $dato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_contrato)
    {
        $dato = request()->except(['_token','_method']);
        Contrato::where('id_contrato','=',$id_contrato)->update($dato);
        return redirect('contrato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_contrato)
    {
        Contrato::destroy($id_contrato);
        return redirect('contrato');
    }
}

