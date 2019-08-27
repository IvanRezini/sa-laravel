<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadoController extends Controller {

    //
    public function index() {

        $usuario[0]['nome'] = 'João';
        $usuario[0]['Cidade'] = 'Brusque';
        $usuario[1]['nome'] = 'Maria';
        $usuario[1]['Cidade'] = 'Blumenau';
        return $usuario;
    }

    public function rh() {
        
    }

}
