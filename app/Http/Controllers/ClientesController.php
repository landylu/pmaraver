<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\SucursalModel;
use Parkiller\ClienteModel;
use Parkiller\TipoClienteModel;
use Parkiller\EstadoModel;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class ClientesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $clientes = ClienteModel::All();
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $fp = array("Formas de Pago" => '–Forma de Pago–', "1" => 'Contado', "2" => 'Tarjeta Debito/Credito', "3" => 'Deposito Bancario');
        $tipocliente = array("0" => '–Tipo Cliente–') + TipoClienteModel::lists('tipoCliente', 'tipoClienteId')->toArray();
        $estado = array("Estados" => '–Estados–') + EstadoModel::lists('Estado', 'EstadoId')->toArray();
        return view('clientes.index', compact('clientes', 'sucursal', 'fp', 'tipocliente', 'estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $tipocliente = array("0" => '–Tipo Cliente–') + TipoClienteModel::lists('tipoCliente', 'tipoClienteId')->toArray();
        $fp = array("Formas de Pago" => '–Forma de Pago–', "1" => 'Contado', "2" => 'Tarjeta Debito/Credito', "3" => 'Deposito Bancario');
        $estado = array("Estados" => '–Estados–') + EstadoModel::lists('Estado', 'EstadoId')->toArray();
        return view('clientes.create', compact('sucursal', 'tipocliente', 'fp', 'estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $cliente = ClienteModel::create([
                    'SucursalId' => $request['SucursalId'],
                    'TipoClienteId' => $request['TipoClienteId'],
                    'FormaPagoId' => $request['FormaPagoId'],
                    'Nombres' => $request['Nombres'],
                    'ApellidoPaterno' => $request['ApellidoPaterno'],
                    'ApellidoMaterno' => $request['ApellidoMaterno'],
                    'Estado' => $request['Estado'],
                    'Municipio' => $request['Municipio'],
                    'Colonia' => $request['Colonia'],
                    'numExt' => $request['numExt'],
                    'numInt' => $request['numInt'],
                    'CP' => $request['CP'],
                    'Telefono' => $request['Telefono'],
                    'Email' => $request['Email'],
                    'Estatus' => $request['Estatus'],
        ]);
        return redirect('/clientes')->with('message', 'Datos Guardados Correctamente');
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
        $clientes = ClienteModel::find($id);
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $tipocliente = array("0" => '–Tipo Cliente–') + TipoClienteModel::lists('tipoCliente', 'tipoClienteId')->toArray();
        $fp = array("Formas de Pago" => '–Forma de Pago–', "1" => 'Contado', "2" => 'Tarjeta Debito/Credito', "3" => 'Deposito Bancario');
        $estado = array("Estados" => '–Estados–') + EstadoModel::lists('Estado', 'EstadoId')->toArray();
        return view('clientes.edit', compact('clientes', 'sucursal', 'tipocliente', 'fp', 'estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $cliente = ClienteModel::find($id);
        $cliente->fill($request->all());
        $cliente->save();
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        ClienteModel::destroy($id);
        Session::flash('message', 'Cliente Eliminado Correctamente');
        return Redirect::to('/clientes');
    }

}
