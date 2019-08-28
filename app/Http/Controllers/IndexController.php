<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class IndexController extends Controller
{
   
    public function index(){
    $titulo = "Senai Brusque";
    $rodape = date('Y').' Todos os direitos reservados.';
     $caminho = 'storage/app';
        $logRegistro = new LogConsulta($caminho);
        $log = $logRegistro->registrar();
        return view('site.index', compact('titulo','rodape','log'));
    }
   
}
