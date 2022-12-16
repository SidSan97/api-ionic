<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Crendentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Acces-Control-Allow-Headers: Content-Type, Authorization, X-Request');
header('Content-Type: application/json; charset=utf-8');

date_default_timezone_get('America/Sao_Paulo');
@session_start();

$host = "localhost";
$user = "root";
$pass = "";
$port = 3306;
$dbname = "projeto_ionic";

try 
{
    //conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo 'conectado com sucesso!';
    
} catch(PDOException $err) {
    die("Erro: Conexão com banco de dados não foi realizada. Erro gerado: 
    " . $err->getMessage());
}