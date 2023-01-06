<?php
namespace App\Controller;
include('App/model/BuscarModel.php');
use App\Model\BuscarModel;

header('Content-Type: application/json; charset=utf-8');

class BuscarController
{
    public function busca($dado)
    {
        $buscaModel = new BuscarModel();
        $buscaModel->buscarDado($dado);
    }
}