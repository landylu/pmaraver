<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Bican\Roles\Models\Permission;
use Session;
use Redirect;
use Parkiller\Http\Controllers\Controller;

class PermisosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $permiso = Permission::All();
        return view('permisos.index', compact('permiso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Permission::create([
            'name' => $request['name'],
            'slug' => $request['name'],
            'description' => $request['description'],
        ]);
        return redirect('/permisos')->with('message', 'Datos Guardados Correctamente');
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
        $permiso = Permission::find($id);
        return view('permisos.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $permiso = Permission::find($id);
        $permiso->fill($request->all());
        $permiso->save();
        return redirect::to('/permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Permission::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/permisos');
    }

}
