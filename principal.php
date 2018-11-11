<!DOCTYPE html>

<?php
session_start();
if (!(isset($_SESSION['login']))) {
    header('Location: index.php');
}
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagina Principal</title>
    </head>
    <body>
            <h1> Página Principal.php</h1> <h2>Olá, <?php echo $_SESSION['login'];?></h2>
            <h2><a href="logout.php">Sair</a></h2>
    </body>
</html>
