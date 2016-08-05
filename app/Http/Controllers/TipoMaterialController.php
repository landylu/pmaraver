<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\TipoMaterialModel;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class TipoMaterialController extends Controller {

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
        $material = TipoMaterialModel::All();
//        return view('material.tipo.index', compact('tipomaterial'));
        return view('materiales.tipo.index',  compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('materiales.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        TipoMaterialModel::create([
            'material' => $request['material'],
            'activo' => $request['activo'],
        ]);
        return redirect('/material/tipo')->with('message', 'Datos Guardados Correctamente');
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
        $tipos = TipoMaterialModel::find($id);
        return view('materiales.tipo.edit', compact('tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $tiposm = TipoMaterialModel::find($id);
        $tiposm->fill($request->all());
        $tiposm->save();
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/material-tipo/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        TipoMaterialModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/material-tipo');
    }

}
