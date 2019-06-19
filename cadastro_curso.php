<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'aluno', FILTER_SANITIZE_STRING);
$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_STRING);
$coordenador = filter_input(INPUT_POST, 'coordenador', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
$modalidade = filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_STRING);



$stmt = $conn->prepare("INSERT INTO curso (nome, duracao,coordenador, nivel, modalidade) 
VALUES (?, ?, ?, ?, ?)");


$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $duracao);
$stmt->bindParam(3, $coordenador);
$stmt->bindParam(4, $nivel);
$stmt->bindParam(5, $modalidade);

$result = $stmt->execute();

if($result===true)
{
    header("LOCATION: index.php");
}else{
    header("LOCATION: erros.php");
}


?>