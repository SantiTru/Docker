<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['password'])) {
  // Verificación de credenciales en la base de datos y configuración de la sesión
  $usuario = strtolower($_POST['usuario']);
  $password = hash('sha512', $_POST['password']);

    try {
      
    require './Connex_BD/connexion.php';

    $statement = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));
    $resultado = $statement->fetch();

    if ($resultado) {
        $_SESSION['usuario'] = $usuario;
        header("Location: contenido.php");
        exit; 
    } else {
      echo "<p style= 'color: red; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>Usuario o contraseña incorrectos.</p><br><br>";
      echo "<p style= 'color: grey; font-weight: bold; font-size: 25px; text-align:center; margin-top: 2%; margin-bottom: 0%';>¿Tienes cuenta?. ¡Registrate!</p><br><br>";
    }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    };
  }
  include '../Views/login.view.html';