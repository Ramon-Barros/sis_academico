<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'aluno', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);


$stmt = $conn->prepare("INSERT INTO aluno (cpf, nome, endereco,complemento, cep, bairro, cidade, estado, telefone) VALUES (:CPF, :NOME, :ENDERECO,:COMPLEMENTO, :CEP, :BAIRRO, :CIDADE, :ESTADO, :TELEFONE)");


$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":CPF", $cpf);
$stmt->bindParam(":ENDERECO", $endereco);
$stmt->bindParam(":COMPLEMENTO", $complemento);
$stmt->bindParam(":CEP", $cep);
$stmt->bindParam(":BAIRRO", $bairro);
$stmt->bindParam(":CIDADE", $cidade);
$stmt->bindParam(":ESTADO", $estado);
$stmt->bindParam(":TELEFONE", $telefone);


$result = $stmt->execute();

if($result===true)
{
    header("LOCATION: certo.php");
}else{
    header("LOCATION: erro.php");
}


?>
