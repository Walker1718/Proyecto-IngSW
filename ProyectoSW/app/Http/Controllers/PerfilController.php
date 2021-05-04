<?php

namespace App\Http\Controllers;

use App\Models\perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoPerfil = request()->except('_token');
        perfil::insert($datoPerfil);
        return response()->json($datoPerfil);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(perfil $perfil)
    {
        return view('perfil.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfil $perfil)
    {
        //
    }
}
