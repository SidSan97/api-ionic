<?php

use App\Controller\InserirController;

$postJson = json_decode(file_get_contents('php://input'), true);

if($_GET['q'] == "cadastrar")
{
    $inserir = new InserirController();
    $inserir->inserir($postJson);
}