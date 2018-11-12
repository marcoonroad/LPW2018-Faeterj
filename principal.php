<!DOCTYPE html>

<?php
session_start();
if (!(isset($_SESSION['matricula']))) {
    header('Location: index.php');
}
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagina Principal</title>
    </head>

    <link rel="stylesheet" href="stylePrincipal.css">
    <body>
            <h1> Página Principal.php</h1> <h2>Olá, <?php echo $_SESSION['221462'];?></h2>
            <h2><a href="logout.php">Sair</a></h2>
    </body>
</html>
