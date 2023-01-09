<?php
include('App/controller/ListarController.php');
include('App/controller/BuscarController.php');
include('App/controller/InserirController.php');
include('App/controller/EditarController.php');
include('App/controller/ExcluirController.php');
include('App/controller/LoginController.php');

use App\Controller\BuscarController;
use App\Controller\EditarController;
use App\Controller\ExcluirController;
use App\Controller\InserirController;
use App\Controller\ListarController;
use App\Controller\LoginController;

require_once __DIR__ . '/vendor/autoload.php';

$postJson = json_decode(file_get_contents('php://input'), true);

if($_GET['q'] == "cadastrar")
{
    $inserir = new InserirController();
    $inserir->inserir($postJson);
}
else if($_GET['q'] == "listar")
{
    $listar = new ListarController();
    $listar->listar();
}
else if($_GET['q'] == "busca")
{
    $dado = $_GET['v'];
    $buscar = new BuscarController();
    $buscar->busca($dado);   
}
else if($_GET['q'] == "editar")
{
    $editar = new EditarController();
    $editar->edit($postJson);
}
else if($_GET['q'] == "excluir")
{
    $id = $_GET['v'];
    $excluir = new ExcluirController();
    $excluir->delete($id);
}
else if($_GET['q'] == "login")
{
    $login = $postJson['usuario'];
    $senha = $postJson['senha'];
    $lc = new LoginController;
    $lc->login($login, $senha);
}