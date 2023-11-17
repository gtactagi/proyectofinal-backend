<?php
// Verifica si se han enviado datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Realiza la validación de usuario y contraseña
    if ($usuario === 'gtactagi' && $contrasena === '12345') {
        // Si los datos son correctos, redirige a listado_BBDD.php
        header('Location: listado_BBDD.php');
        exit();
    } else {
        // Si los datos no son correctos, muestra un mensaje en formulario_login.html
        echo '<script>alert("Los datos ingresados no son correctos. Vuelve a intentar.");';
        echo 'window.location.href = "index_login.html";</script>';
        exit();
    }
} else {
    // Si no se enviaron datos por POST, redirige a la página de inicio de sesión
    header('Location: index_login.html');
    exit();
}
?>
