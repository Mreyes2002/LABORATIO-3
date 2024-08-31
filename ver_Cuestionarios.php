<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cuestionarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Ver Cuestionarios</h1>
        <nav>
            <a href="index.php" class="boton">Inicio</a>
            <a href="creacion_Cuestionaraio.php" class="boton">Crear Cuestionario</a>
        </nav>
    </header>
    <main>
        <section class="contenido">
            <?php

            if (file_exists("cuestionarios.txt")) {
                $archivo = fopen("cuestionarios.txt", "r");
                echo "<ul class='lista-cuestionarios'>";
                while (($linea = fgets($archivo)) !== false) {
                    echo "<li>" . nl2br(htmlspecialchars($linea)) . "</li>";
                }
                echo "</ul>";
                fclose($archivo);
            } else {
                echo "<p>No se encontraron cuestionarios.</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>
