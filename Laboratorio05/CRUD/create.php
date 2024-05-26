<<!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Persona</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Crear Persona</h1>
            <form action="create.php" method="post" class="bg-white p-6 rounded
shadow-md">
                <label for="dni" class="block">DNI:</label>
                <input type="text" id="dni" name="dni" class="border p-2 w-full
mb-4" required>
                <label for="nombres" class="block">Nombres:</label>
                <input type="text" id="nombres" name="nombres" class="border p-2
w-full mb-4" required>
                <label for="apellidopa" class="block">Apellido Paterno:</label>
                <input type="text" id="apellidopa" name="apellidopa" class="border p-2 w-full mb-4" required>
                <label for="apellidoma" class="block">Apellido Materno:</label>
                <input type="text" id="apellidoma" name="apellidoma" class="border p-2 w-full mb-4" required>
                <button type="submit" name="submit" class="bg-blue-500 textwhite px-4 py-2 rounded">Crear</button>
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            include_once 'db.php';
            $database = new Database();
            $db = $database->getConnection();
            $persona = new Persona($db);
            $persona->dni = $_POST['dni'];
            $persona->nombres = $_POST['nombres'];
            $persona->apellidopa = $_POST['apellidopa'];
            $persona->apellidoma = $_POST['apellidoma'];
            if ($persona->create()) {
                header("Location: index.php?message=created");
                exit();
            } else {
                echo "<div class='mt-4 p-2 bg-red-500 text-white'>No se pudo
    crear la persona.</div>";
            }
        }
        ?>
    </body>

    </html>