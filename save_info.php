<?php
$host="localhost";
$usuario="root";
$contraseña="2001";
$base="icodado";

$conexion= mysqli_connect($host, $usuario, $contraseña, $base);
if (!$conexion){
	echo"Fallo la conexion con el servidor";
}

if (isset($_POST['save_info'])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $query = "INSERT INTO contacto (nombre,email,asunto,mensaje) VALUES ('$nombre', '$email', '$asunto','$mensaje')";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("Query Failed.");
    } else {
        include ("index.php");
        ?>
    <!DOCTYPE html>
        <html>
            <body>
                <script>
                    const mensaje = document.getElementById("exito");
                    const elementoHtml = document.createElement("p");
                    elementoHtml.textContent = "¡Mensaje Enviado!";
                    mensaje.appendChild(elementoHtml);
                </script>
                <br></br>
            </body>
        </html>
    <?php
    }
}

if (isset($_POST['enviar'])) {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];
    $curso = $_POST["curso"];
    $correo = $_POST["correo"];
    $query = "INSERT INTO preinscripcion VALUES ('$cedula', '$nombre', '$edad', '$telefono','$curso', '$correo')";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("Query Failed.");
    } else {
        include ("form.php");
        ?>
    <!DOCTYPE html>
        <html>
            <body>
                <script>
                    const mensaje = document.getElementById("exito1");
                    const elementoHtml = document.createElement("p");
                    elementoHtml.textContent = "¡Pre-inscripción Exitosa!";
                    mensaje.appendChild(elementoHtml);
                </script>
                <br></br>
            </body>
        </html>
    <?php
    }
}
?>