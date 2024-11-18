<?php
$array = [ 
    "name" => "Jesus",
    "lastname" => "Matiz", 
    "age" => empty ($_GET["age"]) ? 41 : intval($_GET["age"]), 
    "servers" =>[
        "server ip" => $_SERVER["SERVER_ADDR"], 
        "remote ip" => $_SERVER["REMOTE_ADDR"] 
    ], 
    "action" => "SUSCRIBETE AL CANAL SI VEZ ESTE MENSAJE!" 
]; 
header("Content application/json");
echo json_encode($array, true);

