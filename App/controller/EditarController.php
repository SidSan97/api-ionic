<?php

namespace App\Controller;
include('App/model/EditarModel.php');
use App\Model\EditarModel;

class EditarController
{
    public function edit($json)
    {
        $editarModel = new EditarModel();
        $editarModel->editarDados($json);
    }
}

