<?php

namespace Parkiller\Http\Controllers;

use Illuminate\Http\Request;
use Parkiller\Http\Requests;
use Parkiller\User;
use Parkiller\UsuariosModel;
use Parkiller\usuarioRolModel;
use Bican\Roles\Models\Role;
use Session;
use Redirect;
use Auth;
use Config;
use Parkiller\Http\Controllers\Controller;

class LockScreenController extends Controller {

    /**
     * Obtiene el tiempo que se mantiene activa la sesion
     * @return \Illuminate\View\View
     */
//    public function session() {
//        //Config::get('session.lifetime');
//          //return view('layouts.lockscreen');
//         if(\Session::get('locked') === true)
//        return redirect('/lockscreen');
//    }

}
