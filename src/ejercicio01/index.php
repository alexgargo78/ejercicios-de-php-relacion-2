<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Ejercicios de PHP – Relación II</h1>
            <h2>Certificaciones de Profesionalidad</h2>
        </div>

        <div id="content">
            <div class="center">
                <h2>Pide la comida más sana a domicilio</h2>

                <form action="resultado.php" method="post">
                    <!-- Fila comidas -->

                    <div style="display: flex; width: 100%; justify-content: center;">
                        <div>
                            <img src="../img/hamburguesa.png" width="200px"><br>
                            <input type="number" name="pedido0" value="0" min="0">
                        </div>
                        <div>
                            <img src="../img/pasta.png" width="200px"><br>
                            <input type="number" name="pedido1" value="0" min="0">
                        </div>
                        <div>
                            <img src="../img/pizza.png" width="200px"><br>
                            <input type="number" name="pedido2" value="0" min="0">
                        </div>
                        <div>
                            <img src="../img/quinoa.png" width="200px"><br>
                            <input type="number" name="pedido3" value="0" min="0">
                        </div>
                    </div>

                    <div style="display: flex; width: 100%; justify-content: center;">
                        <div>
                            <img src="../img/agua.png" width="100px"><br>
                            <input type="number" name="pedido4" value="0" min="0">
                        </div>
                        <div>
                            <img src="../img/cerveza.png" width="100px"><br>
                            <input type="number" name="pedido5" value="0" min="0">
                        </div>
                        <div>
                            <img src="../img/refresco.png" width="100px"><br>
                            <input type="number" name="pedido6" value="0" min="0">
                        </div>
                    </div>

                    <br><br>

                    <br><br>
                    <div style="text-align:center;">
                        <button type="submit">Hacer pedido</button>
                    </div>
                </form>
            </div>
            <p><a href="../index.php">🏠 página principal</a></p>
        </div>





        <div id="footer">
            © 2025 Alejandro García Gómez
        </div>
    </div>


    </div>
</body>

</html>