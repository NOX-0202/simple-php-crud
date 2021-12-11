<?php

use source\Models\User;

$response = [];
$user = null;

if (isset($_GET["ID"])) {
    $user = (new User())->findById($_GET["ID"]);
} else {
    $user = (new User())->find()->fetch();
}

if ($user->fail()) {
    $response["success"] = false;
    $response["message"] = "Não foi possivel listar";
} else {
    $response["data"] = $user;
    echo json_encode($response);
}