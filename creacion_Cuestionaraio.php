<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuestionario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Crear Cuestionario</h1>
        <nav>
            <a href="index.php" class="boton">Inicio</a>
            <a href="ver_Cuestionarios.php" class="boton">Ver Cuestionarios</a>
        </nav>
    </header>
    <main>
        <section class="contenido">
            <form action="guardar_Cuestionaario.php" method="post" class="formulario">
                <label for="titulo_cuestionario">Título del Cuestionario:</label>
                <input type="text" id="titulo_cuestionario" name="titulo_cuestionario" required>

                <label for="pregunta">Pregunta:</label>
                <input type="text" id="pregunta" name="pregunta" required>

                <label for="respuesta">Respuesta:</label>
                <input type="text" id="respuesta" name="respuesta" required>

                <button type="submit" class="boton boton-primario">Guardar Cuestionario</button>
            </form>
        </section>
    </main>
</body>
</html>
