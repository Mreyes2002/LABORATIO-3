<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización y validación básica de los datos recibidos
    $titulo = htmlspecialchars(trim($_POST['titulo_cuestionario']));
    $pregunta = htmlspecialchars(trim($_POST['pregunta']));
    $respuesta = htmlspecialchars(trim($_POST['respuesta']));

    if (!empty($titulo) && !empty($pregunta) && !empty($respuesta)) {
        // Guardar los datos en un archivo
        $archivo = fopen(__DIR__ . "/cuestionarios.txt", "a");

        if ($archivo === false) {
            echo "<div class='mensaje-error'>Error: No se pudo abrir el archivo para escritura.</div>";
        } else {
            fwrite($archivo, "Título: $titulo\nPregunta: $pregunta\nRespuesta: $respuesta\n\n");
            fclose($archivo);

            echo "<div class='mensaje'>Cuestionario guardado correctamente. <a href='index.php'>Volver al inicio</a></div>";
        }
    } else {
        echo "<div class='mensaje-error'>Error: Todos los campos son obligatorios. <a href='crear_cuestionario.php'>Intentar de nuevo</a></div>";
    }
}
?>
