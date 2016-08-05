<?php

namespace Parkiller\Http\Controllers;
use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\TipoClienteModel;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class TipoClientesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tipos = TipoClienteModel::All();
        return view('clientes.tipo.index',  compact('tipos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('clientes.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        TipoClienteModel::create([
            'tipoCliente' => $request['tipoCliente'],
            'estatus' => $request['estatus'],
        ]);
        return redirect('/clientes-tipos')->with('message', 'Datos Guardados Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $tipos = TipoClienteModel::find($id);
        return view('clientes.tipo.edit', compact('tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $tipoc = TipoClienteModel::find($id);
        $tipoc->fill($request->all());
        $tipoc->save();
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/clientes-tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        TipoClienteModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/clientes-tipos');
    }

}
