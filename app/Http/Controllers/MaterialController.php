<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\MaterialModel;
use Parkiller\SucursalModel;
use Parkiller\CalidadModel;
use Parkiller\TipoMaterialModel;
use Parkiller\StocksHistorialModel;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class MaterialController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $material = MaterialModel::All();
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $tipo = array("0" => '–Tipo–') + TipoMaterialModel::lists('material', 'tipoMaterialId')->toArray();
        $unidad = array("0" => '–Unidad de Medida–', "Piezas" => 'Piezas', "Metros" => 'Metros');
        $calidad = array("0" => '–Calidad–') + CalidadModel::lists('Nombre', 'CalidadId')->toArray();
        return view('materiales.index', compact('material', 'sucursal', 'tipo', 'unidad', 'calidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $tipo = array("0" => '–Tipo–') + TipoMaterialModel::lists('material', 'tipoMaterialId')->toArray();
        $calidad = array("0" => '–Calidad–') + CalidadModel::lists('Nombre', 'CalidadId')->toArray();
        $unidad = array("0" => '–Unidad de Medida–', "Piezas" => 'Piezas', "Metros" => 'Metros');
        return view('materiales.create', compact('sucursal', 'tipo', 'calidad', 'unidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        MaterialModel::create([
            'sucursalId' => $request['sucursalId'],
            'calidadId' => $request['calidadId'],
            'tipoMaterialId' => $request['tipoMaterialId'],
            'stock' => $request['stock'],
            'precio' => $request['precio'],
            'fechaIngreso' => $request['fechaIngreso'],
            'materialNombre' => $request['materialNombre'],
            'unidadDeMedida' => $request['unidadDeMedida'],
        ]);
        StocksHistorialModel::create([
            'sucursalId' => $request['sucursalId'],
            'calidadId' => $request['calidadId'],
            'tipoMaterialId' => $request['tipoMaterialId'],
            'stock' => $request['stock'],
            'precio' => $request['precio'],
            'fechaIngreso' => $request['fechaIngreso'],
            'materialNombre' => $request['materialNombre'],
            'unidadDeMedida' => $request['unidadDeMedida'],
        ]);
        return redirect('/material')->with('message', 'Datos Guardados Correctamente');
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
        $material = MaterialModel::find($id);
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $tipo = array("0" => '–Tipo–') + TipoMaterialModel::lists('material', 'tipoMaterialId')->toArray();
        $unidad = array("0" => '–Unidad de Medida–', "Piezas" => 'Piezas', "Metros" => 'Metros');
        $calidad = array("0" => '–Calidad–') + CalidadModel::lists('Nombre', 'CalidadId')->toArray();
        return view('materiales.edit', compact('material', 'sucursal', 'tipo', 'unidad', 'calidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $material = MaterialModel::find($id);
        $material->fill($request->all());
        $material->save();
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/material');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
