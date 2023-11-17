<?php
// Crear conexión a la base de datos
$conn = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se envió el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $id_producto = $_POST['id_producto'];
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];
    $precio_unitario = $_POST['precio_unitario'];

    // Actualizar el producto en la base de datos
    $sql = "UPDATE productos_piscina SET descripcion_producto='$descripcion', nombre='$nombre', precio_unitario='$precio_unitario' WHERE id_producto=$id_producto";

    if ($conn->query($sql) === TRUE) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }
}

// Obtener el id_producto de la URL
$id_producto = $_GET['id_producto'];

// Obtener los datos del producto seleccionado
$sql = "SELECT * FROM productos_piscina WHERE id_producto = $id_producto";
$result = $conn->query($sql);

// Verificar si se encontró el producto
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre = $row['nombre'];
} else {
    echo "Producto no encontrado.";
    exit;
}

// Cerrar conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
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
            background: #ff99cc;
            /* Fondo color rosa */
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
            background: #ff66b2;
            /* Cambio de color al pasar el mouse */
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
            <h2>Editar Producto</h2>
            <form method="post" action="">
                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']; ?>">
                <label for="descripcion">Descripción</label>
                <input class="controls" type="text" name="descripcion" value="<?php echo $row['descripcion_producto']; ?>" required><br>
                <label for="nombre">Nombre</label>
                <input class="controls" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
                <label for="precio_unitario">Precio Unitario</label>
                <input class="controls" type="number" name="precio_unitario" value="<?php echo $row['precio_unitario']; ?>" required><br>
                <input class="buttons" type="submit" value="Guardar Cambios">
            </form>
        </div>
    </div>
</body>

</html>
