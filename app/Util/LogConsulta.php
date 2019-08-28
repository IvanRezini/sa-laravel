<?php

namespace App\Util;

class LogConsulta {

    private $caminho;

    public function __construct($caminho) {
        $this->caminho = $caminho;
    }

    public function registrar($formato = 'n') {

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
            $this->gravarArquivo($dadosAtuais);
        } else {
            $this->gravarArquivo($data);
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

   function obterIpe() {
   //$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$clienteIp = \Request::getClientIp(true);
       return $clienteIp;

}

}
