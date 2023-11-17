<?php
// Creando conexión
$conn = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM productos_piscina";
// Ejecutando consulta y almacenando resultados
$result = $conn->query($sql);

// Cerrando conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="estilos81.css">
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
        width: 80%;
        margin: auto;
        background: #4e4d4d;
        margin-top: 50px;
        box-shadow: 7px 13px 37px #000;
        padding: 20px;
        border-top: 4px solid #017bab;
        color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid white;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #252323;
        font-size: 14px;
        font-weight: bold;
    }

    td {
        font-size: 14px;
    }

    input[type="number"] {
        width: 50px;
        padding: 5px;
        text-align: center;
        background: #252323;
        border: 1px solid #017bab;
        color: white;
    }

    .buttons {
        width: 100%;
        height: 40px;
        background: #017bab;
        border: none;
        color: white;
        margin-bottom: 16px;
        cursor: pointer;
    }

    .buttons:hover {
        background: #015377;
    }

    .add-button {
        float: right;
        margin: 10px;
        background-color: #ffcccc;
        padding: 10px;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .edit-btn, .delete-btn {
        background-color: #ff9999;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin-right: 5px;
        cursor: pointer;
    }
    </style>
    <script>
        function confirmarEliminar(id) {
            if (confirm("¿Está seguro de eliminar el producto?")) {
                window.location.href = "eliminar_producto1.php?id=" + id;
            }
        }

        function confirmarEditar(id) {
            window.location.href = "editar_producto.php?id_producto=" + id;
        }
    </script>
</head>
<body>
    <div class="container">
        <a href="agregar_producto.php" class="add-button">Agregar Producto</a>
        <h2>Lista de Productos</h2>
        <table>
            <thead>
                <tr>
                    <th>Descripción del Producto</th>
                    <th>Nombre</th>
                    <th>Precio Unitario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre los resultados y generar filas de la tabla
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['descripcion_producto'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>$" . $row['precio_unitario'] . ".00</td>";
                    echo "<td>
                            <a href='javascript:void(0);' onclick='confirmarEditar(".$row["id_producto"].")' class='edit-btn'>&#9998;</a>
                            <a href='javascript:void(0);' onclick='confirmarEliminar(".$row["id_producto"].")' class='delete-btn' title='Delete' data-toggle='tooltip'>&#xE872;</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
