<!DOCTYPE html>
<html lang="en">
<head>

  <?php include './template/head.php'; ?>
  <title>Consulta de Eventos</title>

</head>

<body id="page-top">

<?php include './template/body-nav.php'; ?>

<section id="Corpo">
<div class="container">

<br>
<h3 class="text-center text-uppercase text-secondary mb-0">Eventos</h3>
<hr class="star-dark mb-5">

<?php

error_reporting(E_ALL|E_STRICT);

require './Conexao.class.php';

$object = new Conexao();
$pdo = $object -> getCon();

$stmt = $pdo->query(
  'SELECT * FROM eventoExterno LIMIT 20'
);
?>

<div class="consulta-wrapper">
<table class="consulta">
<tr>
  <th>Nome</th>
  <th>Endereço</th>
  <th>Descrição</th>
  <th>Pré-requisitos</th>
  <th>Data de realização</th>
</tr>
<?php
$counter = 0;
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

echo "<tr>\n" .

     "<td>" . $row->nome . "</td>\n" .
// =============================================================================
     "<td>" . $row->endereco . "</td>\n" .
// =============================================================================
     "<td>" . $row->descricao . "</td>\n" .
// =============================================================================
     "<td>" . $row->pre_requisitos . "</td>\n" .
// =============================================================================
     "<td>" . $row->data_realizacao . "</td>\n" .

     "</tr>\n";

  $counter += 1;

}

// cria ao menos 5 linhas de entrada
for ($rowIndex = $counter; $rowIndex < 5; $rowIndex += 1) {
  echo "<tr>\n";
  for ($columnIndex = 0; $columnIndex < 5; $columnIndex += 1) {
    echo "<td></td>";
  }
  echo "</tr>\n";
}

?>
</table>
</div>

</div>
</section>

<?php include './template/body-footer.php'; ?>
<?php include './template/body-js.php'; ?>

</body>
</html>
