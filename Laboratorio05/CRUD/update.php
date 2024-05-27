<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Actualizar Persona</h1>
        <?php
        include_once 'db.php';
        $database = new Database();
        $db = $database->getConnection();
        $persona = new Persona($db);
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['dni'])) {
            $persona->dni = $_GET['dni'];
            $result = $persona->read($_GET['dni'], 0, 1);
            $row = $result->fetch_assoc();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $persona->dni = $_POST['dni'];
            $persona->nombres = $_POST['nombres'];
            $persona->apellidopa = $_POST['apellidopa'];
            $persona->apellidoma = $_POST['apellidoma'];
            if ($persona->update()) {
                echo "<div class='mt-4 p-2 bg-green-500 text-white'>Persona
actualizada exitosamente.</div>";
                header("Location: index.php?message=updated");
                exit();
            } else {
                echo "<div class='mt-4 p-2 bg-red-500 text-white'>No se pudo
actualizar la persona.</div>";
            }
        }
        ?>
        <form action="update.php" method="post" class="bg-white p-6 rounded
shadow-md">
            <label for="dni" class="block">Dni:</label>
            <input type="text" id="dni" name="dni" value="<?php echo isset($row['dni']) ? $row['dni'] : ''; ?>" class="border p-2 w-full mb-4">
            <label for="nombres" class="block">Nombres:</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo
                                                                    isset($row['nombres']) ? $row['nombres'] : ''; ?>" class="border p-2 w-full mb-4">
            <label for="apellidopa" class="block">Apellido Paterno:</label>
            <input type="text" id="apellidopa" name="apellidopa" value="<?php echo isset($row['apellidopa']) ? $row['apellidopa'] : ''; ?>" class="border p-2 w-full mb-4">
            <label for="apellidoma" class="block">Apellido Materno:</label>
            <input type="text" id="apellidoma" name="apellidoma" value="<?php echo isset($row['apellidoma']) ? $row['apellidoma'] : ''; ?>" class="border p-2 w-full mb-4">
            <button type="submit" name="submit" class="bg-blue-500 textwhite px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
</body>

</html>