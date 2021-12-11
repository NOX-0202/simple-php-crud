<?php

use source\Models\User;

$response = [];

$user = (new User())->findById($_GET["ID"]);

if ($user->destroy()){
    $response["success"] = true;
    $response["message"] = "Salvo com sucesso!";
} else {
    $response["success"] = false;
    $response["message"] = "Não salvo com sucesso!";
}

echo json_encode($response);