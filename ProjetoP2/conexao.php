<?php

$dominio = "mysql:host=localhost;dbname=academia_php";
$usuario = "root";
$senha = "";

try{
    $pdo = new PDO($dominio,$usuario,$senha);
}
catch(Exception $e){
    die("Erro: ".$e->getMessage());
}