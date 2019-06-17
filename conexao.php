<?php


$conn = new PDO("mysql:dbname=sis_academico; host=127.0.0.1", "root", "");

if(!$conn) {
    die('Não foi possivel ter a conexão com o banco'. mysql_error());
}

?>