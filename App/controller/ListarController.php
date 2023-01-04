<?php

namespace App\Controller;
include('App/model/ListarModel.php');
use App\Model\ListarModel;

class ListarController
{
    public function listar()
    {
        $listar = new ListarModel();
        $listar->listarTudo();
    }
}