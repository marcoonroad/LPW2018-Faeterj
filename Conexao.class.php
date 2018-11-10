<?php

class Conexao {
   private $usuario = "root";
    private $senha = "";
    private $caminho = "localhost";
    private $banco = "login";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha,$this->banco) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
    }

    public function getCon() {
        return $this->con;
    }

}
