<?php

require_once('../conexao.php');

$postJson = json_decode(file_get_contents('php://input'), true);

