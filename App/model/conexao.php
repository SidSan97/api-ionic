<?php
namespace App\Model;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Crendentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Acces-Control-Allow-Headers: Content-Type, Authorization, X-Request');
header('Content-Type: application/json; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');

@session_start();


abstract class Conexao
{
    private $dbname   = 'mysql:host=localhost;dbname=projeto_ionic';
    private $user     = 'root';
    private $password = '';

    protected function connect()
    {
        try {
            $conn = new \PDO($this->dbname, $this->user, $this->password);
            $conn->exec("set names utf8");
        } catch (\PDOException $erro) {
            echo $erro->getMessage();
        }

        return $conn;
    }
}