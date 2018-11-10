<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            login:<input type="text" name="login"/><br>
            senha:<input type="text" name="senha"/><br>
            <input type="submit" value="entrar"/>
        </form>
        <?php
        if ($_POST) {
                require 'C:/xampp/htdocs/login/UsuarioDAO.class.php';
         
                $usuario = new UsuarioDAO();
                
                $login = addslashes($_POST['login']);
                $senha = addslashes($_POST['senha']);


                $user = $usuario->login($senha, $login);

                if ($user == TRUE) {
                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['senha'] = $senha;                    
                    header("location: principal.php");
                    exit;
                } else {
                    header("location: index.php?erro=senha");
                }
            }
        ?>
        <?php
         if ($_GET) {
                if (isset($_GET['erro'])) {
                    echo "Usuário ou senha inválidos!";
                }
            }
         ?>
    </body>
</html>
