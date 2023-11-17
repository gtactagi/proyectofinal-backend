<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: arial;
        background-image: url('bg.png');
      }

      .form-login {
        width: 400px;
        height: 340px;
        background: #4e4d4d;
        margin: auto;
        margin-top: 180px;
        box-shadow: 7px 13px 37px #000;
        padding: 20px 30px;
        border-top: 4px solid #017bab;
        color: white;
      }

      .form-login h5 {
        margin: 0;
        text-align: center;
        height: 40px;
        margin-bottom: 30px;
        border-bottom: 1px solid;
        font-size: 20px;
      }

      .controls {
        width: 100%;
        border: 1px solid #017bab;
        margin-bottom: 15px;
        padding: 11px 10px;
        background: #252323;
        font-size: 14px;
        font-weight: bold;
      }

      .buttons {
        width: 100%;
        height: 40px;
        background: #017bab;
        border: none;
        color: white;
        margin-bottom: 16px;
      }

      .form-login p {
        height: 40px;
        text-align: center;
        border-bottom: 1px solid;
      }

      .form-login a {
        color: white;
        text-decoration: none;
        font-size: 14px;
      }

      .form-login a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <section class="form-login">
      <h5>Formulario Login</h5>
      <form action="validar_login.php" method="post"> <!-- Modifica el atributo 'action' con el nombre de tu script PHP -->
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
        <input class="buttons" type="submit" value="Ingresar">
      </form>
      <p><a href="#">¿Olvidaste tu Contraseña?</a></p>
    </section>
  </body>
</html>
