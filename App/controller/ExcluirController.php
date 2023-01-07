<?php

namespace App\Controller;
include('App/model/ExcluirModel.php');
use App\Model\ExcluirModel;

class ExcluirController
{
    public function delete($id)
    {
        $editarModel = new ExcluirModel();
        $editarModel->editarDados($id);
    }
}