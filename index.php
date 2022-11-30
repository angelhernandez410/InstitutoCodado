<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Codado</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/solologo.png" type="image/x-icon">
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
                <a href="#contacto" class="nav-kink">Contacto</a>
                <a href="form.php" class="nav-kink1">FORMULARIO</a> 
            </nav>
        </a>
    </header>
    <div class = "banner">
        <div class="fondo-negro">
            <div class="banner-c">
                <img src="img/solologo.png" alt="" class="img-inicio">
                <h1>Instituto Codado</h1>
                <h2>Desde la formación de oficios hasta la especialización en nuestros diplomados</h2>
            </div>
        </div>
    </div>
    <main>
        <section class="contenedor">
            <h2 class="subtitulo"><b>Acerca de Nosotros</b></h2>
            <div class="contenedor-aboutus">
                <img src="img/aboutus.jpg" alt="" class="img-about">
                <div class="info-aboutus">
                    <p>Somos una empresa con 44 años de experiencia en el área de Capacitación y Consultoría. 
                        Realizamos el máximo esfuerzo para garantizar el crecimiento profesional del recurso humano de nuestros clientes, 
                        gracias a la oferta de los más avanzados e innovadores cursos y programas de capacitación.</p>
                </div>
            </div>
        </section>
        <section class="contenedor" style='background-color: rgb(242, 242, 242);'>
            <h2 class="subtitulo"><b>Misión</b></h2>
            <div class="contenedor-aboutus">
                <div class="info-aboutus">
                    <p>Permanecer en el tiempo como la solución de nuestros clientes en el desarrollo y fortalecimiento de su recurso 
                        humano, a través de la alta calidad de nuestros programas; garantizando un sistema de trabajo que provea 
                        conocimiento y bienestar profesional.</p>
                </div>
                <img src="img/mision.jpg" alt="" class="img-about">
            </div>
        </section>
        <section class="contenedor">
            <h2 class="subtitulo"><b>Visión</b></h2>
            <div class="contenedor-aboutus">
                <img src="img/vision.jpg" alt="" class="img-about">
                <div class="info-aboutus">
                    <p>Ser reconocidos internacionalmente como la Empresa Líder en consultoría y capacitación de personal, contribuyendo 
                        al crecimiento y cambio organizacional de nuestros clientes.</p>
                </div>
            </div>
        </section>
        <section class="contenedor" style='background-color: rgb(242, 242, 242);'>
            <h2 class="subtitulo"><b>Valor Agregado</b></h2>
            <div class="contenedor-aboutus">
                <div class="info-aboutus">
                    <p>Ofrecemos soluciones para la formación, a nivel Nacional, de grandes grupos de personas de las empresas y/o trabajadores
                         temporales que se desempeñen en proyectos especiales.</p>
                </div>
                <img src="img/estudio.jpg" alt="" class="img-about">
            </div>
        </section>
        <div class="fondo-cursos">
            <div class = fondo-negro2>
                <div class="banner-c">
                    <h1>Cursos</h1>
                    <p>Los programas de adiestramiento de Instituto CODADO, C.A. poseen reconocimientos de nuestros clientes y se 
                        encuentran registrados ante el INCES bajo el Nº 327.548 y ante el Ministerio del Poder Popular para la 
                        Educación bajo el código Nº PR0161507.La escogencia de los cursos y la adaptación de contenidos programáticos 
                        se realizará en función a las necesidades y requerimientos del Cliente.
                    </p>
                    <a class="btn btn-1" href="cursos.php">Ver cursos</a>
                </div>
            </div>
        </div>
        <section id="contacto">
        <h2 class="subtitulo" style='margin-top: 40px;'><b>Ubicación y Contacto</b></h2>
        <div class="warpper" data-aos="fade-up">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="one-tab" for="one">Ubicación</label>
                <label class="tab" id="two-tab" for="two">Contacto</label>
        </div>
        <div class="panels">
            <div class="panel" id="one-panel">
                <div>
                    <div class="direccion">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.210665872608!2d-66.85852688396805!3d10.484052546989519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5857bf704f43%3A0x83d7ea21068c9363!2sInstituto%20CODADO!5e0!3m2!1ses-419!2sve!4v1669684607533!5m2!1ses-419!2sve" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-container"></iframe>
                        <div class="dir">
                            <p class="info-letra"><b>Dirección:</b> Edf. IUDAG Esquina de Sociedad a San Francisco, Av. Universidad, Caracas 1012 Distrito Capital, Venezuela<br><br><b>Teléfonos:</b>
                            +58 412-2257324, +58 424-1459403, +58 412-9003500<br><br><b>Email:</b> contacto@icodado.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel" id="two-panel">
                    <div class="direccion">
                        <div class="contact">
                            <h2 class="title">Formulario de Contacto</h2>
                            <h3 class="subtitle">Llena el formulario y nos pondremos <br> en contacto contigo.</h3>
                        </div>
                    <div class="contacto_form">
                        <div class="formulario">
                            <form method="post" action= "save_info.php">
                                <p class="p-form">
                                    <label for="nombre" class="colocar_nombre">Nombre
                                        <span class="obligatorio">*</span>
                                    </label>
                                       <input type="text" name="nombre" id="nombre" required="obligatorio" class="input-form">
                                </p>
                                <p class="p-form">
                                    <label for="email" class="colocar_email">Email
                                        <span class="obligatorio">*</span>
                                    </label>
                                    <input type="email" name="email" id="email" required="obligatorio" class="input-form">
                                </p>
                                <p class="p-form">
                                    <label for="asunto" class="colocar_asunto">Asunto
                                        <span class="obligatorio">*</span>
                                    </label>
                                    <input type="text" name="asunto" id="assunto" required="obligatorio" class="input-form">
                                </p>
                                <p class="p-form">
                                    <label for="mensaje" class="colocar_mensaje">Mensaje
                                         <span class="obligatorio">*</span>
                                    </label>
                                    <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio"></textarea>
                                </p>
                                <input class="boton-form" type="submit" name="save_info" value="Enviar">
                                <p class="aviso">
                                    <span class="obligatorio"> *
                                    </span>Los campos son
                                        obligatorios.
                                </p>
                            </form>
                    </div>
                </div>    
            </div>
            <div id="exito" class = "exito">
                
            </div>
        </section>
    </main>
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
        <div class="banner-b">
            <p class="Copy">Copyright © by Hernández-Rojas</p>
        </div>
    </footer>
</body>
</html>