<?php

$db = mysqli_connect($_ENV['HOST'], $_ENV['DB_USER'], $_ENV['DB_USER_PASSWORD'], $_ENV['DB_PASSWORD']);


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    exit;
}
