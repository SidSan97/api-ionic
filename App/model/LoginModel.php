<?php

namespace App\Models;

use App\Model\Conexao;

require_once('App/model/conexao.php');

class LoginModel extends Conexao
{
    public function validarLogin($login, $senha)
    {

        $conn = $this->connect();

        $sql  = "SELECT * FROM usuarios WHERE cpf = '$login' or email = '$login' LIMIT 1";
        $stmt = $conn->prepare($sql);

        if($stmt->execute()) {

            if(($linha = $stmt->fetch(\PDO::FETCH_ASSOC))) {
                
                if(password_verify($senha, $linha['senha'])) {
                   
                    $json = json_encode(['status' => 200, 'dados' => $linha]);
                    echo $json;
                    exit;
                }
                else {                     
                  
                    $json = json_encode(['status' => 300, 'dados' => "usuario ou senha inválida"]);
                    echo $json;
                    exit;
                }
            }
            else {
               
                $json = json_encode(['status' => 301, 'dados' => "erro ao se conectar com o banco"]);
                echo $json;
                exit;
            }
        }
        else {
            $json = json_encode(['status' => 302, 'dados' => "erro ao se conectar com o banco"]);
            echo $json;
            exit;
        }
    }
}