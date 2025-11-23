<?php
echo "<h1>Test de Conexión a BD - Buscando Database.php</h1>";

// Mostrar la ruta actual
echo "Directorio actual: " . __DIR__ . "<br><br>";

$possible_paths = [
    "config/Database.php",
    "app/config/Database.php", 
    "../config/Database.php",
    "../app/config/Database.php",
    "C:/xampp/htdocs/gestion_escolar/config/Database.php",
    "C:/xampp/htdocs/gestion_escolar/app/config/Database.php"
];

$database_found = false;

foreach ($possible_paths as $path) {
    $full_path = __DIR__ . "/" . $path;
    if (file_exists($full_path)) {
        echo "✅ ENCONTRADO: " . $full_path . "<br>";
        require_once $full_path;
        $database_found = true;
        break;
    } else {
        echo "❌ NO EXISTE: " . $full_path . "<br>";
    }
}

if (!$database_found) {
    echo "<h2>❌ NO SE ENCONTRÓ Database.php</h2>";
    echo "<p>Voy a buscar en todo el directorio...</p>";
    
    // Buscar recursivamente
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(__DIR__)
    );
    
    foreach ($files as $file) {
        if ($file->getFilename() === 'Database.php') {
            echo "✅ ENCONTRADO EN: " . $file->getPathname() . "<br>";
            require_once $file->getPathname();
            $database_found = true;
            break;
        }
    }
}

if (!$database_found) {
    die("❌ NO SE ENCONTRÓ Database.php EN NINGUNA UBICACIÓN");
}

// Ahora probar la conexión
try {
    echo "<h2>Probando conexión...</h2>";
    $database = new Database();
    $conn = $database->conectar();
    
    if ($conn) {
        echo "✅ CONEXIÓN A BD EXITOSA<br>";
        
        // Verificar si hay usuarios
        $stmt = $conn->query("SELECT COUNT(*) as total FROM usuarios");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo "Usuarios en BD: " . $result['total'] . "<br>";
        
        if ($result['total'] > 0) {
            // Mostrar usuarios
            $stmt = $conn->query("SELECT usuario, rol, contraseña FROM usuarios");
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<h3>Usuarios disponibles:</h3>";
            foreach ($usuarios as $usuario) {
                echo "Usuario: <strong>" . $usuario['usuario'] . "</strong> - Rol: " . $usuario['rol'] . " - Contraseña: " . $usuario['contraseña'] . "<br>";
            }
        } else {
            echo "❌ NO HAY USUARIOS EN LA BASE DE DATOS";
        }
        
    } else {
        echo "❌ ERROR EN LA CONEXIÓN";
    }
    
} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage();
}

echo "<h2>Estructura de carpetas:</h2>";
echo "<pre>";
system("dir " . __DIR__ . " /B");
echo "</pre>";
?>