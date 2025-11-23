<?php

class PaginasController {

    public function index() {
        include __DIR__ . "/../views/index.php";
    }

    public function alumnos() {
        include __DIR__ . "/../views/alumnos.php";
    }

    public function profesores() {
        include __DIR__ . "/../views/profesores.php";
    }

    public function administrativo() {
        include __DIR__ . "/../views/administrativo.php";
    }

}
