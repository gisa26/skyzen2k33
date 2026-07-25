<?php

require_once "config.php";

function formatBytes($bytes)
{
    $units = ['B','KB','MB','GB','TB'];

    for ($i = 0; $bytes >= 1024 && $i < count($units)-1; $i++) {
        $bytes /= 1024;
    }

    return round($bytes,2)." ".$units[$i];
}

?>