<?php


include_once "../vendor/autoload.php";

use Source\Models\User;

$response = [];

$user = (new User())->findById($_GET["ID"]);

if ($user->destroy()){
    $response["success"] = true;
    $response["message"] = "Deletado com sucesso!";
} else {
    $response["success"] = false;
    $response["message"] = "Não Deletado com sucesso!";
}

echo json_encode($response);