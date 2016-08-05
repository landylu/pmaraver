<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\SucursalModel;
use Parkiller\EstadoModel;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class SucursalController extends Controller {

//    public function __construct() {
//
//        $this->middleware('auth');
////        $this->middleware('admin');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sucursales = SucursalModel::All();
        $estados = array("0" => '–Estados–') + EstadoModel::lists('estado', 'estadoId')->toArray();
        return view('sucursales.index', compact('sucursales', 'estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $estados = array("0" => '–Estados–') + EstadoModel::lists('estado', 'estadoId')->toArray();
        return view('sucursales.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        SucursalModel::create([
            'sucursalEstadoId' => $request['sucursalEstadoId'],
            'sucursal' => $request['sucursal'],
        ]);
        return redirect('/sucursal')->with('message', 'Datos Guardados Correctamente');
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
        $sucursal = SucursalModel::find($id);
        $estados = array("0" => '–Estados–') + EstadoModel::lists('estado', 'estadoId')->toArray();
        return view('sucursales.edit', compact('sucursal', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $sucursal = SucursalModel::find($id);
        $sucursal->fill($request->all());
        $sucursal->save();
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/sucursal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        SucursalModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/sucursal');
    }

}
