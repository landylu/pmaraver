<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\Http\Requests\loginRequest;
use Parkiller\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

class logController extends Controller {

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
        return view('home');
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
    public function store(loginRequest $request) {
        if (Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
            $name = $request['name'];
            return view('home', compact('name'));
        }
        Session::flash('message-error', 'Datos Incorrectos');
        return Redirect::to('/');
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/')->with('mensaje', 'Tu sesión ha sido cerrada.');
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
