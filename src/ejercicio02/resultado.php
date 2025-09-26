<?php
// src/ejercicio02/resultado.php
session_start();

/* 1) Dinero inicial (primer acceso desde index.php) */
if (isset($_POST['dinero'])) {
  $_SESSION['dinero'] = (int) $_POST['dinero'];
}

/* 2) Saldo actual */
$dinero = isset($_SESSION['dinero']) ? (int) $_SESSION['dinero'] : 0;
if ($dinero <= 0) {
  header("Location: index.php");
  exit;
}

/* 3) Resultado aleatorio:
      0 = pierde todo, 1 = pierde la mitad, 2 = gana el doble */
$resultado = rand(0, 2);
$estado = "";
$mensaje = "";
$imagen  = "";

if ($resultado === 0) {
  // Pierde todo
  $dinero = 0;
  $estado  = "pierde_todo";
  $mensaje = "💀 Mala suerte... ¡Has perdido todo!";
  $imagen  = "../img/calavera.png";
} elseif ($resultado === 1) {
  // Pierde la mitad
  $dinero = (int) floor($dinero / 2);

  if ($dinero <= 0) {
    // Si al perder la mitad se queda en 0, es equivalente a perder todo
    $estado  = "pierde_todo";
    $mensaje = "💀 Mala suerte... ¡Has perdido todo!";
    $imagen  = "../img/calavera.png";
  } else {
    $estado  = "pierde_mitad";
    $mensaje = "❌ Has perdido la mitad. Ahora tienes " . number_format($dinero, 0, ',', '.') . " €.";
    $imagen  = "../img/mediolimon.png";
  }
} else {
  // Gana el doble
  $dinero  = $dinero * 2;
  $estado  = "gana_doble";
  $mensaje = "🎉 ¡Has ganado! Ahora tienes " . number_format($dinero, 0, ',', '.') . " €.";
  // Usa una imagen existente (no tienes gato.png)
  $imagen  = "../img/gatochinosuerte.png";
}

/* 4) Guardar nuevo saldo */
$_SESSION['dinero'] = $dinero;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado de la apuesta</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación II</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content" class="center">
            <h2>Resultado de la jugada</h2>
            <img src="<?= $imagen ?>" width="200"><br><br>
            <p><?= $mensaje ?></p>

            <?php if ($estado == "pierde_todo"): ?>
            <h2>Te has quedado sin dinero.</h2>
            <a href="index.php"><button type="button">Volver a empezar</button></a>

            <?php else: ?>
            <form method="post" action="resultado.php">
                <button type="submit">Sigo jugando</button>
            </form>
            <br>
            <a href="resultadofinal.php"><button type="button"><h2></h2>Me planto <?= $dinero ?> €</button></a>
            <?php endif; ?>
        </div>

        <div id="footer">
            © 2025 Alejandro García Gómez
        </div>
    </div>
</body>

</html>