<?php
include('App/controller/ListarController.php');
include('App/controller/BuscarController.php');

use App\Controller\BuscarController;
use App\Controller\InserirController;
use App\Controller\ListarController;

require_once __DIR__ . '/vendor/autoload.php';

$postJson = json_decode(file_get_contents('php://input'), true);

if($_GET['q'] == "cadastrar")
{
    $inserir = new InserirController();
    $inserir->inserir($postJson);
}

if($_GET['q'] == "listar")
{
    $listar = new ListarController();
    $listar->listar();
}

if($_GET['q'] == "busca")
{
    $dado = $_GET['v'];
    $buscar = new BuscarController();
    $buscar->busca($dado);   
}