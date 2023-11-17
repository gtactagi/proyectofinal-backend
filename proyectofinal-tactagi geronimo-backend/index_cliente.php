<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos para Piscinas</title>
    <link rel="stylesheet" href="estilos9.css">
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
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
  }

  header {
    background-color: silver; /* Cambia el color del encabezado a plateado */
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    width: 100%;
  }

  .logo {
    font-size: 24px;
  }

  nav ul {
    list-style: none;
    display: flex;
  }

  nav ul li {
    margin-right: 20px;
  }

  .product-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Muestra 2 tarjetas por fila en computadoras */
    gap: 20px;
    margin: 20px auto; /* Centra horizontalmente las tarjetas */
    align-items: center; /* Centra las tarjetas verticalmente */
    justify-content: center; /* Centra las tarjetas horizontalmente */
    max-width: 800px; /* Limita el ancho del contenedor para que no se extienda demasiado en pantallas grandes */
  }

  .product-card {
    background: #4e4d4d;
    box-shadow: 7px 13px 37px #000;
    padding: 20px;
    text-align: center;
    color: white;
  }

  .product-image img {
    width: 100%;
    height: auto;
    border: 1px solid #017bab; /* Agrega un borde alrededor de la imagen */
  }

  h3 {
    font-size: 20px;
    margin: 10px 0;
    color: white;
  }

  p {
    color: white;
  }

  .buy-button {
    width: 100%;
    background: #017bab;
    border: none;
    color: white;
    height: 40px;
    cursor: pointer;
    margin-top: 10px;
  }

  .buy-button:hover {
    background: #015377;
  }

  footer {
    background-color: silver;
    padding: 20px;
    text-align: center;
    color: white;
    width: 100%; /* Ocupa todo el ancho del cuerpo */
  }
</style>
  </head>
  <body>
    <header>
      <div class="logo">ChemTec-One</div>
      <nav>
        <ul>
          <li><a href="index_login1.php">Admin</a></li>
        </ul>
      </nav>
    </header>
    <section class="product-container">
      <div class="product-card">
        <div class="product-image">
          <img src="imagenes/cuso4.jpg" alt="Sulfato de cobre">
        </div>
        <h3>Sulfato de cobre</h3>
        <p>Precio: $500-1kg</p>
        <button class="buy-button">Comprar</button>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="imagenes/so4al.jfif" alt="Sulfato de aluminio">
        </div>
        <h3>Sulfato de aluminio</h3>
        <p>Precio: $155-1kg</p>
        <button class="buy-button">Comprar</button>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="imagenes/clors.jfif" alt="Cloro solido">
        </div>
        <h3>Cloro solido</h3>
        <p>Precio: $200-Unidad</p>
        <button class="buy-button">Comprar</button>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="imagenes/cloro-liquido.jpg" alt="Cloro">
        </div>
        <h3>Cloro liquido</h3>
        <p>Precio: $120-litro</p>
        <button class="buy-button">Comprar</button>
      </div>
    </section>
    <footer>
      <p>Mail: chem1@gmail.com</p>
      <p>Teléfono: 2213334456</p>
      <p>Horarios: Lun a Vier: 8:00 a 13:00 hs y 16:00 a 20:00</p>
    </footer>
  </body>
</html>
