<?php

header("Content-Type: application/json");

$file = __DIR__ . "/../../database/accounts.json";

$data = json_decode(file_get_contents($file), true);

$user = [
    "username" => $_POST['username'] ?? "",
    "uuid" => $_POST['uuid'] ?? "",
    "protocol" => $_POST['protocol'] ?? "",
    "expired" => $_POST['expired'] ?? "",
    "quota" => $_POST['quota'] ?? "",
    "domain" => $_POST['domain'] ?? ""
];

if ($user['username'] == "") {
    echo json_encode([
        "success" => false,
        "message" => "Username kosong"
    ]);
    exit;
}

$data["users"][] = $user;

file_put_contents(
    $file,
    json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

echo json_encode([
    "success" => true,
    "message" => "User berhasil ditambahkan"
]);