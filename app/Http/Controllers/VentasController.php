<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\SucursalModel;
use Parkiller\ClienteModel;
use Parkiller\EstadoModel;
use Parkiller\TipoClienteModel;
use Parkiller\MaterialModel;
use Session;
use Redirect;
use Response;
use Parkiller\Http\Controllers\Controller;

class VentasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $fp = array("Formas de Pago" => '–Forma de Pago–', "1" => 'Contado', "2" => 'Tarjeta Debito/Credito', "3" => 'Deposito Bancario');
        $tipocliente = array("0" => '–Tipo Cliente–') + TipoClienteModel::lists('tipoCliente', 'tipoClienteId')->toArray();
        $estado = array("Estados" => '–Estados–') + EstadoModel::lists('Estado', 'EstadoId')->toArray();
//        $clientes = ClienteModel::Name($request->name)->get();
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $acabados = array("Acabados" => "-Acabados-", "Bolsas" => 'Bolsas', "Vulcanizado" => 'Vulcanizado', "Espacio P/Tensar" => 'Espacio P/Tensar', 'Sin Acabados' => 'Sin Acabados');
        $material = array("" => "-Material-") + MaterialModel::lists('materialNombre', 'materialId')->toArray();
        return view('ventas.index', compact('clientes', 'fp', 'estado', 'tipocliente', 'sucursal', 'acabados', 'material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
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

    public function autocompletar(Request $request) {
        $term = $request->input('tags');
        if (!empty($term)) {
            $clientes = ClienteModel::where('Nombres', 'LIKE', '%' . $term . '%')
                            ->join('tiposclientes', 'tiposclientes.tipoClienteId', '=', 'clientes.TipoClienteId')
                            ->join('formaspagos', 'formaspagos.FormaPagoId', '=', 'clientes.FormaPagoId')
                            ->select('ClienteId', 'ApellidoPaterno', 'ApellidoMaterno', 'Nombres', 'Colonia', 'numExt', 'CP', 'Estado', 'Municipio', 'Telefono', 'Email', 'tiposclientes.tipoCliente', 'formaspagos.FormaPago')->get();
            foreach ($clientes as $data) {
                $return_array = array("ApellidoPaterno" => $data->ApellidoPaterno, "ApellidoMaterno" => $data->ApellidoMaterno, "Nombres" => $data->Nombres, "Colonia" => $data->Colonia, "numExt" => $data->numExt, "CP" => $data->CP, "Estado" => $data->Estado, "Municipio" => $data->Municipio, "Telefono" => $data->Telefono, "Email" => $data->Email, "TipoCliente" => $data->tipoCliente, "FormaPago" => $data->FormaPago);
            }
            $cliente = array('clientes' => $return_array);
            return $array = json_encode($cliente);
        } else {

            $return_array = array("ApellidoPaterno" => " ", "ApellidoMaterno" => " ", "Nombres" => "No existe el cliente", "Colonia" => " ", "numExt" => "  ", "CP" => " ", "Estado" => " ", "Municipio" => "  ", "Telefono" => " ", "Email" => " ", "TipoCliente" => "  ", "FormaPago" => " ");
            $cliente = array('clientes' => $return_array);
            return $array = json_encode($cliente);
        }
    }

//    function vista() {
//      return view('ventas.autocompletar');
//    }

    public function buscarPrecio(Request $request) {
        $precios = MaterialModel::where('materialId', '=', '1', 'AND', 'sucursalId', '=', '4');
         //var_dump($precios);
//        foreach ($precios as $data) {
//            $return_array = array("Precio" => $data->precio);
//            var_dump($return_array);
//        }
//        $precio = array('Precio' => $return_array);
        return json_encode($precios);
    }

}
