<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\Http\Controllers\Controller;

class GmapsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //recibiendo el numero de conductores y clientes
        $cond = $request->input('cond');
        $user = $request->input('cliente');

        //configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 600;
        $config['map_height'] = 600;
        $config['zoom'] = 16;
        $config['sensor'] = TRUE;

        //trazado de rutas 
//        $config['directions'] = TRUE;
//        $config['directionsStart'] = 'empire state building';
//        $config['directionsEnd'] = 'statue of liberty';
//        $config['directionsDivID'] = 'directionsDiv';
//        
        //Saber la ubicacion actual
        
//        $config['onboundschanged'] = 'if (!centreGot) {
//	var mapCentre = map.getCenter();
//	marker_0.setOptions({
//		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
//	});
//}
//centreGot = true;';

        \Gmaps::initialize($config);
        for ($x = 0; $x < $cond; $x++) {
//            print_r([$x]);
            $coord = rand(17, 17) . '.950' . rand(300, 500) . ',-' . rand(92, 93) . '.' . rand(990000, 998288);
            $mdata_[$x] = array();
            $mdata_[$x]['position'] = $coord;
            $mdata_[$x]['draggable'] = FALSE;
            $mdata_[$x]['animation'] = 'DROP';
            $mdata_[$x]['trafficOverlay'] = TRUE;
            $mdata_[$x]['infowindow_content'] = $coord;
            $mdata_[$x]['icon'] = '../public/dist/img/carro-compacto.png';
            \Gmaps::add_marker($mdata_[$x]);
        }
        for ($y = 0; $y < $user; $y++) {
//            print_r([$y]);
            $coord = rand(17, 17) . '.950' . rand(300, 500) . ',-' . rand(92, 93) . '.' . rand(990000, 998288);
            $mdata_[$y] = array();
            $mdata_[$y]['position'] = $coord;
            $mdata_[$y]['draggable'] = FALSE;
            $mdata_[$y]['animation'] = 'DROP';
            $mdata_[$y]['trafficOverlay'] = TRUE;
            $mdata_[$y]['infowindow_content'] = 'Cliente ' . $y;
            $mdata_[$y]['icon'] = '../public/dist/img/usuario.png';
            \Gmaps::add_marker($mdata_[$y]);
        }

        $map = \Gmaps::create_map();


        //Devolver vista con datos del mapa
        return view('gmaps', compact('map'));
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

}
