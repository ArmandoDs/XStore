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
    case '/user':
        require __DIR__ . '/user/index.php';
        break;
    case '/empresa':
        require __DIR__ . '/empresa/index.php';
        break;
  
    default:
        require __DIR__ . '/login.php';
        break;
}
?>