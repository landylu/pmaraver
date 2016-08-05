<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Bican\Roles\Models\Permission;
use Bican\Roles\Models\Role;
use Parkiller\PermisoUserModel;
use Parkiller\PermisoRoleModel;
use Parkiller\User;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class AsignarPermisosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//        $roles = PermisoRoleModel::All();
//        $users = PermisoUserModel::All();
        $usuario = array("Usuario" => '–Usuario–') + User::lists('name', 'id')->toArray();
        $permiso = array("Permisos" => '–Permisos–') + Permission::where('status', 1)->lists('name', 'id')->toArray();
        $rolname = array("Rol" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        $roles = PermisoRoleModel::join('permission_user', 'permission_role.id', '=', 'permission_user.id')
                ->get();
        return view('permisos.asignar.index', compact('roles','permiso','usuario','rolname'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $user = array("Usuario" => '–Usuario–') + User::lists('name', 'id')->toArray();
        $permiso = array("Permisos" => '–Permisos–') + Permission::where('status', 1)->lists('name', 'id')->toArray();
        $roles = array("Rol" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('permisos.asignar.asignar_permisos', compact('user', 'permiso', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $usuario = PermisoRoleModel::create([
                    'role_id' => $request['role_id'],
                    'permission_id' => $request['permission_id'],
        ]);
        $rol = PermisoUserModel::create([
                    'permission_id' => $request['permission_id'],
                    'user_id' => $request['role_id'],
        ]);
        return redirect('/asignar-permisos')->with('message', 'Datos Guardados Correctamente');
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
    public function edit(Request $request, $id) {
        //$permisorol = PermisoRoleModel::find($id);
        $permisorol = PermisoRoleModel::join('permission_user', 'permission_role.id', '=', 'permission_user.id')
                ->find($id);
        $user = array("Usuario" => '–Usuario–') + User::lists('name', 'id')->toArray();
        $permiso = array("Permisos" => '–Permisos–') + Permission::where('status', 1)->lists('name', 'id')->toArray();
        $roles = array("Rol" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
//        $permisos = array("Permisos" => '–Permisos–') + Permission::where('status', 1)->lists('name', 'id')->toArray();
        return view('permisos.asignar.edit', compact('permisorol', 'roles', 'user', 'permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $roles = PermisoRoleModel::find($id);
        $roles->fill($request->all());
        $roles->save();
        $user = PermisoUserModel::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect::to('/asignar-permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        PermisoRoleModel::destroy($id);
        PermisoUserModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/asignar-permisos');
    }

}
