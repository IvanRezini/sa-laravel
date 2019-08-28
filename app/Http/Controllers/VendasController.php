<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class VendasController extends Controller {

    public function vendas() {
        $titulo = "Vendas Senai";
        $rodape = date('Y') . ' Todos os direitos reservados.';
        $caminho = '../storage/app';
        $logRegistro = new LogConsulta($caminho);
        $log = $logRegistro->registrar('n', '  Vendas');
        return view('site.index', compact('titulo', 'rodape', 'log'));
    }

}
