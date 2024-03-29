<?php

namespace App\Util;

class LogConsulta {

    private $caminho;

    public function __construct($caminho) {
        $this->caminho = $caminho;
    }

    public function registrar($formato = 'n',$pagina = '  Chamada pelo Prompt') {

        if ($formato == 'n') {
            $data = date('d/m/Y H:i');
        } else if ($formato == 't') {
            $data = time();
        } else {
            $data = "Parametro Invalido";
        }

        if (file_exists($this->caminho . '/log_gerar.txt')) {
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n" . $data . $this->obterIpe();
            $this->gravarArquivo($dadosAtuais. $pagina);
        } else {
            $this->gravarArquivo($data. $pagina);
        }
        $data .="  " . $this->obterIpe();
        return $data;
    }

    private function gravarArquivo($data) {
        file_put_contents($this->caminho . '/log_gerar.txt', $data);
    }

    public function capturar() {

        $dados = file_get_contents($this->caminho . '/log_gerar.txt');
        return $dados;
    }

    public function obterIpe() {
   //$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$clienteIp = \Request::getClientIp(true);
       return $clienteIp;

}

public function ultimoAcesso() {
    $ultimo = $this->capturar();
     $linhasArray = explode("\n", $ultimo);
    $linhasArray = array_reverse($linhasArray);
    return $linhasArray[0];
}

}
