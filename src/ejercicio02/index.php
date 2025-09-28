<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Apuesta y Gana</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación II</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content" class="center">
            <h2>Apuesta y gana</h2>
            <form method="post" action="resultado.php">
                <p>Por favor, introduzca la cantidad que quiere apostar:</p>
                <input type="number" min="1" name="dinero" required> €<br><br>
                <input type="submit" value="Aceptar">
            </form>

            <p><a href="../index.php">🏠 Página principal</a></p>
        </div>

        <div id="footer">
            © 2025 Alejandro García Gómez
        </div>
    </div>
</body>

</html>