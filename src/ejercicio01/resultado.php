<?php
// Precios básicos de cada producto
$precios = [
  6.95, // Hamburguesa vegetariana
  8.50, // Pasta al pesto
  8.0, // Pizza caprese
  7.0, // Quinoa con verdura
  1.2, // Agua
  2.0, // Cerveza
  1.8  // Refresco
];

// Nombres de los productos
$nombres = [
  "Hamburguesa vegetariana", "Pasta al pesto", "Pizza caprese", "Quinoa con verdura",
  "Agua", "Cerveza", "Refresco"
];

// Recoger cantidades
$pedido = [];
$total = 0;

for ($i = 0; $i < count($precios); $i++) {
  $pedido[$i] = isset($_POST["pedido$i"]) ? (int) $_POST["pedido$i"] : 0;
  $total += $pedido[$i] * $precios[$i];
}
?>
<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado del pedido</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación II</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <h2>Aquí tiene su pedido</h2>
            <table border="1" cellpadding="6" cellspacing="0">
                <tr>
                    <th>Comida/bebida</th>
                    <th>PVP</th>
                    <th>Cantidad Subtotal (€)</th>
                    <th>Subtotal (€)</th>
                </tr>
                <?php for ($i = 0; $i < count($precios); $i++): ?>
                <?php if ($pedido[$i] > 0): ?>
                <tr>
                    <td><?= $nombres[$i] ?></td>
                    <td><?= $pedido[$i] ?></td>
                    <td><?= number_format($precios[$i], 2, ',', '.') ?></td>
                    <td><?= number_format($pedido[$i] * $precios[$i], 2, ',', '.') ?></td>
                </tr>
                <?php endif; ?>
                <?php endfor; ?>
                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td><strong><?= number_format($total, 2, ',', '.') ?> €</strong></td>
                </tr>
            </table>

           
        
        <p><a href="index.php">← Volver al formulario</a></p>
        <p><a href="../index.php">🏠 página principal</a></p>
    </div>

    <div id="footer">
        © 2025 Alejandro García Gómez
    </div>
    </div>
</body>

</html>