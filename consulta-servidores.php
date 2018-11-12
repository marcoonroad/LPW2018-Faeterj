<!DOCTYPE html>
<html lang="en">
<head>

  <?php include './template/head.php'; ?>
  <title>Consulta de Servidores</title>

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

$offset = intval($_GET['offset']);
$offset = $offset < 0 ? 0 : $offset;

$object = new Conexao();
$pdo = $object -> getCon();

$stmt = $pdo->query(
  "SELECT * FROM servidor LIMIT 20 OFFSET $offset"
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

<hr/>

<div class="paging-wrapper">
  <form class="middle-form"></form>
<?php
if ($offset !== 0) {
?>
  <form method="get" action="consulta-servidores.php" class="previous-button">
    <input type="hidden" name="offset" value="<?php echo max(0, $offset - 20); ?>"/>
    <center><input type="submit" class="btn btn-dark" value="previous"/></center>
  </form>
<?php
}
?>

<?php
if ($counter >= 20) {
?>
  <form method="get" action="consulta-servidores.php" class="next-button">
    <input type="hidden" name="offset" value="<?php echo ($offset + 20); ?>"/>
    <center><input type="submit" class="btn btn-dark" value="next"/></center>
  </form>
<?php
}
?>
<div class="clear-fix-forms"></div>
</div>

</div>

</div>
</section>

<?php include './template/body-footer.php'; ?>
<?php include './template/body-js.php'; ?>

</body>
</html>
