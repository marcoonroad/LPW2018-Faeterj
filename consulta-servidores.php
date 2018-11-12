<!DOCTYPE html>
<html lang="en">
<head>

  <?php include './template/head.php'; ?>
  <title>Consulta de Servidores</title>

  <style>
  table.consulta {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
  }

  table.consulta th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 15px;
  }

  table.consulta td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 15px;
  }

  div.consulta-wrapper {
    width: 90%;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
</head>

<body id="page-top">

<?php include './template/body-nav.php'; ?>

<section id="Corpo">
<div class="container">

<br>
<h3 class="text-center text-uppercase text-secondary mb-0">Servidores</h3>
<hr class="star-dark mb-5">

<?php

error_reporting(E_ALL|E_STRICT);

require './Conexao.class.php';

$object = new Conexao();
$pdo = $object -> getCon();

$stmt = $pdo->query(
  'SELECT * FROM servidor'
);
?>

<div class="consulta-wrapper">
<table class="consulta">
<tr>
  <th>Nome</th>
  <th>Data de Nascimento</th>
  <th>CPF</th>
  <th>Matrícula</th>
  <th>Formação Acadêmica</th>
  <th>Cargo</th>
  <th>Função</th>
</tr>
<?php
$counter = 0;
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

echo "<tr>\n" .

     "<td>" . $row->nome . "</td>\n" .
// =============================================================================
     "<td>" . $row->data_nascimento . "</td>\n" .
// =============================================================================
     "<td>" . $row->cpf . "</td>\n" .
// =============================================================================
     "<td>" . $row->matricula . "</td>\n" .
// =============================================================================
     "<td>" . $row->formacao_academica . "</td>\n" .
// =============================================================================
     "<td>" . $row->cargo . "</td>\n" .
// =============================================================================
     "<td>" . $row->funcao . "</td>\n" .

     "</tr>\n";

  $counter += 1;

}

// cria ao menos 5 linhas de entrada
for ($rowIndex = $counter; $rowIndex < 5; $rowIndex += 1) {
  echo "<tr>\n";
  for ($columnIndex = 0; $columnIndex < 7; $columnIndex += 1) {
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
