<?php
session_start();

// Si es la primera vez, guardamos el dinero inicial
if (isset($_POST['dinero'])) {
  $_SESSION['dinero'] = (int) $_POST['dinero'];
}

$dinero = isset($_SESSION['dinero']) ? $_SESSION['dinero'] : 0;

// Si no hay saldo, volvemos al inicio
if ($dinero <= 0) {
  header("Location: ejercicio2/index.php");
  exit;
}

// Generar resultado aleatorio: 0 = pierde todo, 1 = pierde mitad, 2 = gana doble
$resultado = rand(0, 2);

if ($resultado == 0) {
  $dinero = 0;
  $mensaje = "💀 Mala suerte... ¡Has perdido todo!";
  $imagen  = "../img/calavera.png";
  $estado  = "pierde_todo";
} elseif ($resultado == 1) {
  $dinero = floor($dinero / 2);
  $mensaje = "❌ Has perdido la mitad. Ahora tienes $dinero €.";
  $imagen  = "../img/mediolimon.png";
  $estado  = "pierde_mitad";
} else {
  $dinero = $dinero * 2;
  $mensaje = "🎉 ¡Has ganado! Ahora tienes $dinero €.";
  $imagen  = "../img/gatochinosuerte.png";
  $estado  = "gana_doble";
}

// Guardamos nuevo saldo
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
            <a href="../index.php"><button type="button"><h2></h2>Me planto <?= $dinero ?> €</button></a>
            <?php endif; ?>
        </div>

        <div id="footer">
            © 2025 Alejandro García Gómez
        </div>
    </div>
</body>

</html>