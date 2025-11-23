<?php
session_start();

class LogoutController {
    public function salir() {
        session_unset();     // Limpia variables
        session_destroy();   // Destruye la sesión
        
        header("Location: /gestion_escolar/public/"); // Redirige al login
        exit;
    }
}
