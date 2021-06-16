<?php

namespace App\Http\Controllers;

use App\Models\clausula;
use Illuminate\Http\Request;
use DB;
use Illuminate\View\View;

class ClausulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clausula'] = clausula::paginate(5);
        return view('clausula.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = clausula::all();
        return view('clausula.create', compact('datos'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clausula  $clausula
     * @return \Illuminate\Http\Response
     */
    public function show($id_clausula)
    {
        $datos['clausula'] = clausula::findOrFail($id_clausula);
        return view('clausula.show', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clausula  $clausula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato['clausula'] = clausula::findOrFail($id);
        return view('clausula.edit', $dato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clausula  $clausula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_clausula)
    {
        $dato = request()->except(['_token','_method']);
        clausula::where('$id_clausula','=',$id_clausula)->update($dato);
        return redirect('clausula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clausula  $clausula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_clausula)
    {
        clausula::destroy($id_clausula);
        return redirect('clausula');
    }

    public function Encontrartextoareaclausula(Request $request){
	
		//it will get price if its id match with product id
		$p=clausula::select('contenido')->where('id_clausula',$request->id_clausula)->first();
		
    	return response()->json($p);
	}

}
