<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class InstitucionalController {
 public function institucional() {
        $titulo = "Institucional";
        $rodape = date('Y') . ' Todos os direitos reservados.';
        $caminho = '../storage/app';
        $logRegistro = new LogConsulta($caminho);
        $log = $logRegistro->registrar('n', '  Institucional');
        return view('site.institucional', compact('titulo', 'rodape', 'log'));
    }
}
