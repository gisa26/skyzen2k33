<?php

require "../config.php";

header("Content-Type: application/json");

if(!file_exists(ACCOUNT_FILE)){
    echo json_encode([
        "users"=>[]
    ]);
    exit;
}

echo file_get_contents(ACCOUNT_FILE);