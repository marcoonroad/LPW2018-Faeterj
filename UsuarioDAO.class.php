<?php
require 'C:/xampp/htdocs/login/Conexao.class.php';
class UsuarioDAO {
    
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function login($senha, $login) {


        $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";


        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($executa) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
