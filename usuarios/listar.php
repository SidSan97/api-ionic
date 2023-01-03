<?php

include_once('../conexao.php');

$sql = "SELECT * FROM usuarios";

$conexao->prepare($sql);

if(($conexao->execute()) and ($conexao->rowCount() != 0))
{
    $dados = $conexao->fetchAll();

    $json = json_encode(['status' => 200, 'dados' => $dados]);
    echo $json;
}

/*$sql = "SELECT * FROM usuarios";

$result_total = mysqli_query($conexao, $sql);
$dados = '';

if(mysqli_num_rows($result_total) > 0)
{
    while($linha = mysqli_fetch_assoc($result_total))
    {
        foreach ($linha as $value) {
            $dados .= $value;
        }
    }

    //$json = json_encode(['status' => 200, 'dados' => $dados]);
    //echo $json;
}*/