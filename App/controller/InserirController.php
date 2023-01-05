<?php

namespace App\Controller;

use App\Model\InserirModel;

header('Content-Type: application/json; charset=utf-8');

class InserirController
{
    public function inserir($json)
    {
        $inserirModel = new InserirModel();
    }
}