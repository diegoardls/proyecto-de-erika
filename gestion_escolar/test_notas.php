<?php
// Test del controlador de notas
require_once "app/controllers/NotaController.php";

$_POST = [
    'action' => 'add_note',
    'contenido' => 'Nota de prueba'
];

session_start();
$_SESSION['usuario_id'] = 1; // ID de prueba

$notaController = new NotaController();
$notaController->handleRequest();
?>