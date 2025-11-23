<?php

require_once __DIR__ . "/../app/controllers/PaginasController.php";
require_once __DIR__ . "/../app/controllers/LogoutController.php";

$pagina = $_GET["p"] ?? "index";

// 1. Logout SIEMPRE debe evaluarse primero
if ($pagina === "logout") {
    $logout = new LogoutController();
    $logout->salir();
    exit;
}

// 2. Ya después manejas las páginas normales
$controlador = new PaginasController();

if (method_exists($controlador, $pagina)) {
    $controlador->$pagina();
} else {
    echo "Página no encontrada.";
}
