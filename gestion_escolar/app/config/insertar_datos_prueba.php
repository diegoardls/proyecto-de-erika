<?php
require_once "Database.php";

function insertarDatosPrueba() {
    $database = new Database();
    $conn = $database->conectar();

    try {
        // Limpiar tablas existentes (OPCIONAL - cuidado si ya tienes datos)
        $conn->exec("DELETE FROM mensajes");
        $conn->exec("DELETE FROM notas");
        $conn->exec("DELETE FROM avisos");
        $conn->exec("DELETE FROM eventos");
        $conn->exec("DELETE FROM administrativo_grupo");
        $conn->exec("DELETE FROM administrativo_carrera");
        $conn->exec("DELETE FROM grupo_materia");
        $conn->exec("DELETE FROM profesor_materia");
        $conn->exec("DELETE FROM alumnos");
        $conn->exec("DELETE FROM profesores");
        $conn->exec("DELETE FROM administrativos");
        $conn->exec("DELETE FROM materias");
        $conn->exec("DELETE FROM grupos");
        $conn->exec("DELETE FROM usuarios");

        echo "Tablas limpiadas...<br>";

        // 1. Insertar usuarios
        $usuarios = [
            ['usuario' => 'alumno123', 'contraseña' => '1234', 'rol' => 'alumno'],
            ['usuario' => 'profe123', 'contraseña' => 'abcd', 'rol' => 'profesor'],
            ['usuario' => 'admin123', 'contraseña' => 'admin', 'rol' => 'administrativo'],
            ['usuario' => 'maria.garcia', 'contraseña' => '1234', 'rol' => 'alumno'],
            ['usuario' => 'juan.perez', 'contraseña' => 'abcd', 'rol' => 'profesor'],
            ['usuario' => 'carlos.lopez', 'contraseña' => 'admin', 'rol' => 'administrativo']
        ];

        foreach ($usuarios as $usuario) {
            $stmt = $conn->prepare("INSERT INTO usuarios (usuario, contraseña, rol) VALUES (?, ?, ?)");
            $stmt->execute([$usuario['usuario'], $usuario['contraseña'], $usuario['rol']]);
            echo "Usuario insertado: " . $usuario['usuario'] . "<br>";
        }

        // 2. Insertar grupos
        $grupos = [
            ['nombre' => 'Grupo1', 'carrera' => 'Ingeniería en Sistemas', 'turno' => 'Matutino', 'aula' => 'A101', 'grado' => '1°'],
            ['nombre' => 'Grupo2', 'carrera' => 'Administración', 'turno' => 'Vespertino', 'aula' => 'A102', 'grado' => '2°'],
            ['nombre' => 'Grupo3', 'carrera' => 'Contaduría', 'turno' => 'Matutino', 'aula' => 'A103', 'grado' => '3°']
        ];

        foreach ($grupos as $grupo) {
            $stmt = $conn->prepare("INSERT INTO grupos (nombre, carrera, turno, aula, grado) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$grupo['nombre'], $grupo['carrera'], $grupo['turno'], $grupo['aula'], $grupo['grado']]);
            echo "Grupo insertado: " . $grupo['nombre'] . "<br>";
        }

        // 3. Insertar administrativos
        $administrativos = [
            [3, 'Carlos López Martínez', 'EMP001', 'Lunes a Viernes 8:00-16:00', 'Edificio A, Oficina 101', 'Coordinación General'],
            [6, 'Ana Rodríguez Silva', 'EMP002', 'Lunes a Viernes 9:00-17:00', 'Edificio B, Oficina 205', 'Control Escolar']
        ];

        foreach ($administrativos as $admin) {
            $stmt = $conn->prepare("INSERT INTO administrativos (id, nombre_completo, num_empleado, horario_atencion, ubicacion, responsabilidad) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute($admin);
            echo "Administrativo insertado: " . $admin[1] . "<br>";
        }

        // 4. Insertar alumnos
        $alumnos = [
            [1, 'Ana López Martínez', 'Ingeniería en Sistemas', 'A123456', 3, 'Matutino', 'A101', 1],
            [4, 'María García Hernández', 'Administración', 'A123457', 3, 'Vespertino', 'A102', 2]
        ];

        foreach ($alumnos as $alumno) {
            $stmt = $conn->prepare("INSERT INTO alumnos (id, nombre_completo, carrera, matricula, encargado_id, turno, aula, grupo_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute($alumno);
            echo "Alumno insertado: " . $alumno[1] . "<br>";
        }

        // 5. Insertar profesores
        $profesores = [
            [2, 'Juan Pérez Rodríguez', 'Ingeniería en Sistemas', 'P987654', 'Lunes a Viernes 7:00-15:00'],
            [5, 'Roberto Sánchez Méndez', 'Administración', 'P987655', 'Lunes a Viernes 15:00-21:00']
        ];

        foreach ($profesores as $profesor) {
            $stmt = $conn->prepare("INSERT INTO profesores (id, nombre_completo, carrera_enfocada, matricula, horario_trabajo) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute($profesor);
            echo "Profesor insertado: " . $profesor[1] . "<br>";
        }

        // 6. Insertar materias
        $materias = [
            ['Programación I', 'Ingeniería en Sistemas'],
            ['Base de Datos', 'Ingeniería en Sistemas'],
            ['Contabilidad', 'Administración'],
            ['Matemáticas Financieras', 'Administración']
        ];

        foreach ($materias as $materia) {
            $stmt = $conn->prepare("INSERT INTO materias (nombre, carrera) VALUES (?, ?)");
            $stmt->execute([$materia[0], $materia[1]]);
            echo "Materia insertada: " . $materia[0] . "<br>";
        }

        // 7. Insertar relación profesor-materia
        $profesorMateria = [
            [2, 1], // Juan Pérez -> Programación I
            [2, 2], // Juan Pérez -> Base de Datos
            [5, 3], // Roberto Sánchez -> Contabilidad
            [5, 4]  // Roberto Sánchez -> Matemáticas Financieras
        ];

        foreach ($profesorMateria as $relacion) {
            $stmt = $conn->prepare("INSERT INTO profesor_materia (id_profesor, id_materia) VALUES (?, ?)");
            $stmt->execute($relacion);
            echo "Relación profesor-materia insertada<br>";
        }

        // 8. Insertar algunos avisos
        $avisos = [
            ['Exámenes Parciales', 'Los exámenes parciales serán la próxima semana. Estudien mucho!', '2024-01-15 10:00:00', 3, 'administrativo', 1],
            ['Suspensión de Clases', 'El viernes no habrá clases por mantenimiento.', '2024-01-16 09:00:00', 3, 'administrativo', null]
        ];

        foreach ($avisos as $aviso) {
            $stmt = $conn->prepare("INSERT INTO avisos (titulo, mensaje, fecha, creado_por, tipo, grupo_id) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute($aviso);
            echo "Aviso insertado: " . $aviso[0] . "<br>";
        }

        echo "<br><strong>¡Datos de prueba insertados correctamente!</strong><br>";
        echo "<a href='/gestion_escolar/'>Ir al Login</a>";

    } catch (PDOException $e) {
        echo "<strong>Error:</strong> " . $e->getMessage();
    }
}

// Ejecutar solo si se accede directamente
if (isset($_GET['insertar']) && $_GET['insertar'] == 'true') {
    insertarDatosPrueba();
} else {
    echo "
    <h1>Insertar Datos de Prueba</h1>
    <p>Este script insertará datos de prueba en la base de datos.</p>
    <p><strong>ADVERTENCIA:</strong> Esto borrará cualquier dato existente.</p>
    <a href='?insertar=true' style='background: red; color: white; padding: 10px; text-decoration: none;'>INSERTAR DATOS DE PRUEBA</a>
    ";
}
?>