<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Gesture Dashboard</title>
    <link rel="stylesheet" href="/gestion_escolar/public/css/alumnos.css">
    <link href="https://fontawesome.com/">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="/gestion_escolar/public/imagenes/Logo.png" alt="School Gesture Logo" class="logo-img">
            <h1 class="logo-text">School Gesture</h1>
            </div>
            <div class="profile-wrapper">
            <div class="user-info">
                <div class="user-text">
                    <span class="user-name">Usuario</span>
                    <span class="user-sub-role">Alumno</span>
                </div>
                
                <div class="profile-picture" id="profile-toggler" ></div>
            </div>

            <div class="profile-actions" id="profile-actions-menu" >
                
                <a href="#" class="action-button">
                    <div class="button-icon help"></div>
                    Recibir Ayuda
                </a>
                
                <a href="/gestion_escolar/public/index.php?p=logout" id="logout-button" class="action-button">
                    <div class="button-icon logout"></div>
                    Cerrar Sesion
                </a>
            </div>
        </div>
    </div>
    </header>
    
    <nav class="main-nav">
        <button class="nav-button active" data-target="inicio" onclick="showContent('inicio')">Inicio</button>
        <button class="nav-button" data-target="info-personal" onclick="showContent('info-personal')">Info Personal</button>
        <button class="nav-button" data-target="consultar" onclick="showContent('consultar')">Consultar</button>
        <button class="nav-button" data-target="contactar" onclick="showContent('contactar')">Contactar</button>
    </nav>
    <main class="dashboard-container">
        
        <section id="inicio-content" class="dashboard-content content-section active">
            <section class="card wide-card notices-card">
                <h2 class="card-title">Avisos Importantes</h2>
                <div class="card-item placeholder" style="height:90px;"></div>
                <div class="card-item placeholder" style="height:90px;"></div>
                <div class="card-item placeholder" style="height:90px;"></div>
            </section>

            <section class="card wide-card events-card">
                <h2 class="card-title">Eventos</h2>
                <div class="card-item placeholder" style="height:90px;"></div>
                <div class="card-item placeholder" style="height:90px;"></div>
                <div class="card-item placeholder" style="height:90px;"></div>
            </section>

        <div class="right-column">
            <section class="card notes-card">
                <h2 class="card-title">Bloc de Notas</h2>
                <div class="notes-input-group">
                    <input type="text" placeholder="Agregar Nota..." class="note-input">
                    <button class="add-note-btn">+</button>
                </div>
                <div class="note-item existing-note">
                    <input type="checkbox" id="examen-manana">
                    <label for="examen-manana">Examen Mañana</label>
                    <button class="delete-note-btn">X</button>
                </div>
            </section>
        
            <main class="dashboard-container-mensajes">
            <section class="card messages-card">
                    <h2 class="card-title messages-header" onclick="toggleMessages()">Mensajes Recibidos 
                        <span class="badge">9+</span></h2>
                    <div id="messages-body-content" class="messages-body">
                        <p>Aqui van los mensajes...</p>
                    </div>
                </section>
        </div>
        </section>

        <section id="info-personal-content" class="content-section info-personal-grid" style="display: none;">
    
        <div class="info-personal-grid-container">
        
                <!-- Primera fila -->
            <div class="fila">
                <div class="campo">Nombre Completo:</div>
                <div class="campo">Carrera:</div>
                <div class="campo">Matrícula:</div>
            </div>

            <!-- Segunda fila -->
            <div class="fila">
                <div class="campo">Encargado/a de Carrera:</div>
                <div class="campo">Horario asignado:</div>
                <div class="campo-peque">Aula:</div>
                <div class="campo-peque">Grupo:</div>
            </div>

            <!-- Tercera fila -->
            <div class="fila">
                <div class="caja-grande">Carga de Materias:</div>
                <div class="caja-grande">Profesores Asignados:</div>
            </div>

        </div>
        </section>

        <section id="consultar-content" class="content-section" style="display: none;">
            <div class="container">

        <div id="horario-header" class="seccion-header">
            Horario de Clase
        </div>
        <div id="horario-content" class="seccion-contenido">
            <div class="general-grid">
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor1</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor2</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor3</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor4</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor5</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor6</strong>
                    Materia Impartida
                </div>
            </div>
        </div>

        <div id="calificaciones-header" class="seccion-header">
            Calificaciones
        </div>
        <div id="calificaciones-content" class="seccion-contenido ">
            <div class="general-grid">
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor1</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor2</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor3</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor4</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor5</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor6</strong>
                    Materia Impartida
                </div>
            </div>
        </div>

        <div id="reincripciones-header" class="seccion-header">
            Reincripciones/Incripciones
        </div>
        <div id="reincripciones-content" class="seccion-contenido">
            <div class="general-grid">
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor1</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor2</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor3</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor4</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor5</strong>
                    Materia Impartida
                </div>
                <div class="general-card">
                    <strong>@MatriculaNombrProfesor6</strong>
                    Materia Impartida
                </div>
            </div>
        </div>
    </div>
        </section>
        
        <section id="contactar-content" class="content-section" style="display: none;">
            <div class="container">
                <div id="administrativo-header" class="seccion-header">
                        Administrativo
                </div>
                    <div id="administrativo-content" class="seccion-contenido">
                        <div class="general-grid">
                            <div class="general-card" >
                                <span class="tamano" > @NumemroAdministrativo1 </span>
                                <span class="espacio"> Horario de atención </span>
                                <span class="espacio"> Ubicacion de oficina </span>
                            </div>
                            <div class="general-card">
                                <span class="tamano" > @NumemroAdministrativo2 </span>
                                <span class="espacio"> Horario de atención </span>
                                <span class="espacio"> Ubicacion de oficina </span>
                            </div>
                            <div class="general-card">
                                <span class="tamano" > @NumemroAdministrativo3 </span>
                                <span class="espacio"> Horario de atención </span>
                                <span class="espacio"> Ubicacion de oficina </span>
                            </div>
                        </div>
                    </div>

                <div id="docentes-header" class="seccion-header">
                    Docentes
                </div>
                <div id="docentes-content" class="seccion-contenido ">
                    <div class="general-grid">
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor1 </span>
                            <span class="espacio"> Materia Impartida </span>

                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor2 </span>
                            <span class="espacio"> Materia Impartida </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor3 </span>
                            <span class="espacio"> Materia Impartida </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor4 </span>
                            <span class="espacio"> Materia Impartida </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor5 </span>
                            <span class="espacio"> Materia Impartida </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrProfesor6 </span>
                            <span class="espacio"> Materia Impartida </span>
                        </div>
                    </div>
                </div>

                <div id="grupo-header" class="seccion-header">
                    Grupo
                </div>
                <div id="grupo-content" class="seccion-contenido">
                    <div class="general-grid">
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno1 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno2 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno3 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno4 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno5 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                        <div class="general-card">
                            <span class="tamano" > @MatriculaNombrAlumno6 </span>
                            <span class="espacio"> Carrera </span>
                            <span class="espacio"> Grado Grupo </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <script src="/gestion_escolar/public/java/alumnos.js"></script>
</body>
</html>