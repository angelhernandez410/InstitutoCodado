<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Codado</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../img/solologo.png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="index.php" class="logo">
            <div class="logo">
                <img src="img/Logo.png" alt="Logo de la compañía">
            </div>
            <nav>
                <a href="index.php" class="nav-kink">Inicio</a>
                <a href="empresas.html" class="nav-kink">Empresas</a>
                <a href="cursos.php" class="nav-kink">Cursos</a>
                <a href="index.php#contacto" class="nav-kink">Contacto</a>
                <a href="form.php" class="nav-kink1">FORMULARIO</a> 
            </nav>
        </a>
    </header>

    <div class="fondo">
        <form action="save_info.php" method="post" class="registro-form">
            <h2>PRE-INSCRIPCION</h2>
            <h3 class="formh3">Cédula de Identidad</h3>
            <input type="text" name="cedula" id="" class="requisito" placeholder="ej: 25976814">
            <h3 class="formh3">Nombre</h3>
            <input type="text" name="nombre" id="" class="requisito" placeholder="ej: Juan Pérez">
            <h3 class="formh3">Edad</h3>
            <input type="text" name="edad" id="" class="requisito" placeholder="ej: 18">
            <h3 class="formh3">Teléfono</h3>
            <input type="text" name="telefono" id="" class="requisito" placeholder="ej: 04129756347">
            <h3 class="formh3">Curso</h3>
            <select name="curso" class="requisito" id="">
                <option disable selected="">--Seleccione un Grado--</option>
                <option>Asistente Administrativo</option>
                <option>Asistente Contable</option>
                <option>Asistente en Informática</option>
                <option>Integral Financiero</option>
            </select>
            <h3 class="formh3">Correo</h3>
            <input type="text" name="correo" id="" class="requisito" placeholder="ej: codado@gmail.com">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <div id="exito1" class = "exito" style='margin-top: 20px;'>
                   
        </div>
    </div>
    <footer>
        <div class="contenedor footer-content">
            <div class="empresa-info">
                <h2 class="brand">Instituto Codado</h2>
                <p>Desde la formación de oficios hasta la especialización <br>en nuestros diplomados</p>
            </div>
            <div class="social-media">
                <a href="https://es-la.facebook.com/" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://twitter.com/?lang=es" class="social-media-icon">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a href="https://www.instagram.com/?hl=es" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
        <div>
            <p class="Copy">Copyright © by Hernández-Rojas</p>
        </div>
    </footer>

</body>
</html>