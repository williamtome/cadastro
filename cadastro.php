<?php

require 'connection.php';

$dados = [
	"nome" => $_POST['nome'], 
	"sobrenome" => $_POST['sobrenome'], 
	"nascimento" => $_POST['nascimento'], 
	"telefone" => $_POST['telefone'],
	"email" => $_POST['email'],
	"rua" => $_POST['rua'],
	"numero" => $_POST['numero'],
	"bairro" => $_POST['bairro'],
	"cidade" => $_POST['cidade'],
	"estado" => $_POST['estado'],
	"pais" => $_POST['pais']
];


print_r($dados);

echo "<br><br>";

$sql = "INSERT INTO cliente (nome, sobrenome, data_nascimento, telefone, email, rua, numero, bairro, cidade, estado, pais) VALUES (".$dados['nome'].", ".$dados['sobrenome'].", ".date("Y-m-d", strtotime($dados['nascimento'])).", ".$dados['telefone'].", ".$dados['email'].", ".$dados['rua'].", ".$dados['numero'].", ".$dados['bairro'].", ".$dados['cidade'].", ".$dados['estado'].", ".$dados['pais'].")";

$result = $con->query($sql) or die($con->error);
if ($result === true) {
	echo "<p>Cliente cadastrado com sucesso.</p>";
} else {
	echo "Erro: " . $sql . "<br>" . $con->error;
}

$con->close();