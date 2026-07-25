<?php
header('Content-Type: application/json');

$username = $_GET['user'] ?? '';

if ($username == '') {
    echo json_encode([
        "status" => false,
        "message" => "Username kosong"
    ]);
    exit;
}

$data = [
    "status" => true,
    "username" => $username,
    "download" => "$download",
    "upload" => "$upload",
    "usage" => "$used",
    "total" => "$total",
    "remain" => "$remain",
    "expired" => "expired",
    "configs" => [
        [
            "type" => "VMess",
            "name" => "WS TLS",
            "url" => "vmess://example"
        ],
        [
            "type" => "VLESS",
            "name" => "WS TLS",
            "url" => "vless://example"
        ],
        [
            "type" => "Trojan",
            "name" => "TCP TLS",
            "url" => "trojan://example"
        ]
    ]
];

echo json_encode($data, JSON_PRETTY_PRINT);