<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Gesture - Login</title>
    <link rel="stylesheet" href="/gestion_escolar/public/css/styles.css">

    <!-- Íconos Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="background"></div>

    <div class="login-container">
        <div class="top-bar"></div>

        <div class="form-content">

            <div class="logo-box">
                <img src="/gestion_escolar/public/imagenes/Logo.png" alt="Logo del sistema" class="logo-img">
            </div>

            <h1>School Gesture</h1>

            <div class="role-selector">

                <button class="role active" data-role="Alumno">
                    <i class="fa-solid fa-user"></i>
                    Alumno
                </button>

                <button class="role" data-role="Profesores">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Profesores
                </button>

                <button class="role" data-role="Administrativo">
                    <i class="fa-solid fa-briefcase"></i>
                    Administrativo
                </button>

            </div>

            

            <label>Usuario</label>
            <input type="text" id="usuario" placeholder="Ingresa tu usuario">
            <div id="user-error" class="error-text"></div>

            <label>Contraseña</label>
            <input type="password" id="contraseña" placeholder="Ingresa tu contraseña">
            <div id="pass-error" class="error-text"></div>

            <button class="btn-login">Iniciar Sesión</button>

        </div>
    </div>
    <script src="/gestion_escolar/public/java/script.js"></script>


</body>
</html>