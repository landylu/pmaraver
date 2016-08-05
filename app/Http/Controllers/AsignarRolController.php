<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\RolesModel;
use Parkiller\usuarioRolModel;
use Parkiller\User;
use Bican\Roles\Models\Role;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class AsignarRolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $roles = Role::All();
        return view('permisos.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//        $usuario = \Parkiller\User::All();
        $user = array("Usuario" => '–Usuario–') + User::lists('name', 'id')->toArray();
        $roles = array("Rol" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('roles.asignar_rol', compact('roles', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
       $usuario = usuarioRolModel::create([
            'role_id' => $request['role_id'],
            'user_id' => $request['user_id'],
        ]);     
        return redirect('/roles')->with('message', 'Datos Guardados Correctamente');
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
