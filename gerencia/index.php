<?php
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require __DIR__ . '/login.php';
        break;
    case '':
        require __DIR__ . '/login.php';
        break;
    case '/login':
        require __DIR__ . '/login.php';
        break;
    default:
        require __DIR__ . '/login.php';
        break;
}
?>