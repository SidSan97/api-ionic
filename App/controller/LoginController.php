<?php

namespace App\Controller;

use App\Models\LoginModel;

include('App/model/LoginModel.php');

class LoginController
{
    public function login($login, $senha)
    {
        $logar = new LoginModel();
        $logar->validarLogin($login, $senha);
    }
}