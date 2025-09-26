<?php
// src/ejercicio02/final.php
session_start();

// Leer saldo final de la sesión
$dinero = isset($_SESSION['dinero']) ? (int) $_SESSION['dinero'] : 0;


// Limpiar sesión para que la próxima partida empiece de cero
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <title>Apuesta y gana — Final</title>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1>Ejercicios de PHP – Relación II</h1>
      <h2>Certificaciones de Profesionalidad</h2>
    </div>

    <div id="content" class="center">
      <h2>Apuesta y gana</h2>

      <?php if ($dinero > 0): ?>
        <p>🎉 ¡Enhorabuena! Te has plantado con <strong><?= number_format($dinero, 0, ',', '.') ?> euros</strong>.</p>
      <?php else: ?>
        <p>💀 Te has plantado sin dinero.</p>
      <?php endif; ?>
      
      <a href="index.php"><button>Volver a jugar</button></a>
      <p><a href="../index.php">🏠 página principal</a></p>
    </div>

    <div id="footer">
      © 2025 Alejandro García Gómez
    </div>
  </div>
</body>
</html>
