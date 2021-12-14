<?php

include_once "../vendor/autoload.php";

use Source\Models\User;

$response = [];
$user = null;

if (isset($_GET["ID"])) {
    $user = (new User())->findById($_GET["ID"]);
} else {
    $user = (new User())->find()->fetch(true);
}
if (!$user) {
    $response["success"] = false;
    $response["message"] = "Não foi possivel listar";
} else {
    $response["success"] = true;
    foreach ($user as $users) {
        $response["data"][] = $users->data();
    }
   
    echo json_encode($response);
}