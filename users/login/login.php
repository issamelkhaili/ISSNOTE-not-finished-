<?php

$database_file = "../database/database.txt";
if (!file_exists($database_file)) {
    echo "Database error";
    exit;
}

$database = file($database_file);

if (empty($_POST)) {
    echo "No data submitted";
    exit;
}

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo "Missing email or password";
    exit;
}

$user_found = false;
foreach ($database as $line) {
    $data = explode("|", $line);

    if (count($data) >= 3 && trim($data[0]) === $_POST['email']) {
        $user_found = true;
        $email = trim($data[0]);
        $password = trim($data[1]);
        $username = trim($data[2]);
        break;
    }
}

if (!$user_found) {
    echo "User Not Found";
    exit;
}

if ($_POST['password'] !== $password) {
    echo "Incorrect Password";
    exit;
} else {
    echo "Welcome Back $username!";
    exit;
}
?>