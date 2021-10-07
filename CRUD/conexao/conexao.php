<?php
$host = "localhost";
$user = "";
$pass = "";
$dbname = "";


$conn = new PDO("mysql:host=$host;dbname=".$dbname,$user,$pass);
    try {
        $conexao = new PDO("mysql:host=localhost; dbname=", "", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão: ".$erro->getMessage();
    }
?>