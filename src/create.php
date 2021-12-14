<?php

include_once "../vendor/autoload.php";

use Source\Models\User;

$response = [];

$user = new User();

$user->Nome = $_POST["Nome"];
$user->Sexo = $_POST["Sexo"];
$user->Nascimento = $_POST["Nascimento"];
$user->Cidade = $_POST["Cidade"];
$user->Estado = $_POST["Estado"];
$user->Expedicao_breve = $_POST["Expedicao_breve"];
$user->Licenca = $_POST["Licenca"];

if ($user->save()){
    $response["success"] = true;
    $response["message"] = "Salvo com sucesso!";
} else {
    $response["success"] = false;
    $response["message"] = "Não salvo com sucesso!";
}

echo json_encode($response);
