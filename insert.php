<?php
$servername = "localhost";
$username = "u241162422_root";
$password = "lpw20182";
$dbname = "u241162422_lpw";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERRO: Não foi possível conectar. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO servidor (nome, data_nascimento, cpf, matricula, id_funcional, formacao_academica, lotacao, cargo, funcao) 
			VALUES (:nome, :data_nascimento, :cpf, :matricula, :id_funcional, :formacao_academica, :lotacao, :cargo, :funcao)";
    $stmt = $pdo->prepare($sql);
    
    echo "nome: ".$_POST['nome']."<br>";
    
    // Bind parameters to statement
    $stmt->bindParam(':nome', $_REQUEST['nome']);
    $stmt->bindParam(':data_nascimento', $_REQUEST['nasc']);
    $stmt->bindParam(':cpf', $_REQUEST['cpf']);
    $stmt->bindParam(':matricula', $_REQUEST['matricula']);
	$stmt->bindParam(':id_funcional', $_REQUEST['idfunc']);
	$stmt->bindParam(':formacao_academica', $_REQUEST['formacad']);
	$stmt->bindParam(':lotacao', $_REQUEST['lotacao']);
	$stmt->bindParam(':cargo', $_REQUEST['cargo']);
	$stmt->bindParam(':funcao', $_REQUEST['funcao']);
	
    // Execute the prepared statement
    $stmt->execute();
    echo "Dados gravados com sucesso";
} catch(PDOException $e){
    die("ERRO: Não foi possível executar a operação $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>