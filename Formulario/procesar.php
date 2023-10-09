<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Formulario</title>
</head>
<body>
    <h1>Resultados del Formulario</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $genero = $_POST["genero"];
        $edad = $_POST["edad"];
        $entidad_federativa = $_POST["entidad_federativa"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];
        $promedio = $_POST["promedio"];
        $correo = $_POST["correo"];

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellido Paterno:</strong> $apellido_paterno</p>";
        echo "<p><strong>Apellido Materno:</strong> $apellido_materno</p>";
        echo "<p><strong>Genero:</strong> $genero</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";
        echo "<p><strong>Entidad Federativa:</strong> $entidad_federativa</p>";
        echo "<p><strong>Carrera Actual:</strong> $carrera</p>";
        echo "<p><strong>Semestre:</strong> $semestre</p>";
        echo "<p><strong>Promedio:</strong> $promedio</p>";
        echo "<p><strong>Correo Electronico:</strong> $correo</p>";
    }
    ?>
</body>
</html>
