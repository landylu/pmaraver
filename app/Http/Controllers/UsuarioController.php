<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\User;
use Parkiller\UsuariosModel;
use Parkiller\usuarioRolModel;
use Bican\Roles\Models\Role;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class UsuarioController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$users = User::All();
        $usuarios = UsuariosModel::all();
        $users = User::join('role_user', 'users.id', '=', 'role_user.role_id')->orderBy('role_user.id', 'ASC')->get();
        $usuarioRol = usuarioRolModel::all();
        $roles = array("0" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('usuario.index', compact('usuarios', 'users', 'roles', 'usuarioRol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = array("" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('usuario.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        User::create([
            'name' => $request['nombre'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        UsuariosModel::create([
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'email' => $request['email'],
            'usuario' => $request['nombre'],
            'tipo_usuario'  => $request['tipo_usuario'],
            'estatus' => $request['status'],
            'password' => bcrypt($request['password']),
            'fecha_registro' => date("Y-m-d"),
            'fecha_activacion' => date("Y-m-d"),
            'fecha_actuliazacion' => date("Y-m-d"),
            'verificado' => '0',
            'acceso' => '1',
            
        ]);
        return redirect('/usuario')->with('message', 'Datos Guardados Correctamente');
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
        $usuarios = UsuariosModel::find($id);
        $roles = array("" => '–Perfil–') + Role::where('status', 1)->lists('description', 'id')->toArray();
//        $user = User::find();
        return view('usuario.edit', compact('usuarios', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = UsuariosModel::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        UsuariosModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

}
