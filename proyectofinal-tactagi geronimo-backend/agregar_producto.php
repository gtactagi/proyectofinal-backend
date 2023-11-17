<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];
    $precio_unitario = $_POST['precio_unitario'];

    // Crear conexión a la base de datos
    $conn = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar el nuevo producto
    $sql = "INSERT INTO productos_piscina (descripcion_producto, nombre, precio_unitario) VALUES ('$descripcion', '$nombre', '$precio_unitario')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado correctamente.";
    } else {
        echo "Error al agregar el producto: " . $conn->error;
    }

    // Cerrar conexión
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Producto</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-image: url('bg.png');
      background-size: cover;
    }

    .container {
      width: 400px;
      margin: auto;
      margin-top: 50px;
    }

    .form-login {
      background: #4e4d4d;
      box-shadow: 7px 13px 37px #000;
      padding: 20px 30px;
      border-top: 4px solid #017bab;
      color: white;
      border-radius: 10px;
    }

    .form-login h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-login label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .controls {
      width: 100%;
      border: 2px solid #017bab;
      margin-bottom: 15px;
      padding: 10px;
      background: #252323;
      font-size: 14px;
      font-weight: bold;
      color: white;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(1, 123, 171, 0.5);
    }

    .controls::placeholder {
      color: white;
    }

    .buttons {
      width: 100%;
      height: 40px;
      background: #ff99cc; /* Fondo color rosa */
      border: none;
      color: white;
      margin-bottom: 16px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .buttons:hover {
      background: #ff66b2; /* Cambio de color al pasar el mouse */
    }

    .form-login a {
      color: white;
      text-decoration: none;
      font-size: 14px;
      display: block;
      text-align: center;
      margin-top: 20px;
    }

    .form-login a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-login">
      <h2>Agregar Producto</h2>
      <form method="post" action="">
        <label for="descripcion">Descripción:</label>
        <input class="controls" type="text" name="descripcion" required>
        <label for="nombre">Nombre:</label>
        <input class="controls" type="text" name="nombre" required>
        <label for="precio_unitario">Precio Unitario:</label>
        <input class="controls" type="number" name="precio_unitario" required>
        <input class="buttons" type="submit" value="Agregar Producto">
      </form>
    </div>
  </div>
</body>

</html>
