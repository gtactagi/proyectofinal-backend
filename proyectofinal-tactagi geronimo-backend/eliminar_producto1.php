<?php
$idProducto = $_GET["id"];

// Validar que $idProducto sea un entero antes de utilizarlo en la consulta
if (!is_numeric($idProducto)) {
    echo "<p>Error en el parámetro de ID del producto.</p>";
    echo "<a href='./productos.php'>Volver</a>";
    exit(); // Salir del script
}

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");

// Utilizar una consulta preparada para evitar inyecciones de SQL
$query = "DELETE FROM productos_piscina WHERE id_producto = ?";
$stmt = mysqli_prepare($conexion, $query);

// Vincular el parámetro de ID como entero
mysqli_stmt_bind_param($stmt, "i", $idProducto);

$resultado = mysqli_stmt_execute($stmt);

if ($resultado === true) {
    echo "<p>Se eliminó el producto correctamente.</p>";
    echo "<a href='./productos.php'>Volver</a>";
} else {
    echo "<p>Hubo un error, vuelva a intentarlo nuevamente.</p>";
    echo "<a href='./productos.php'>Volver</a>";
}

// Cerrar la consulta preparada y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
