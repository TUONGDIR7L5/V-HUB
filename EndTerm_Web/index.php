<?php
$controllerPath = 'controller/controller.php';
if (file_exists($controllerPath)) {
    require_once $controllerPath;
} else {
    die("Error: Controller file not found at $controllerPath");
}
?>