<?php
require 'seu caminho aqui! /Conexao.class.php';
class UsuarioDAO {
    
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function login($senha, $login) {

        $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";

        $result = $conexao->query( $sql );
        $rows = $result->fetchAll();

        if ($rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
