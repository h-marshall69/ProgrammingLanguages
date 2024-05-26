<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona</title>
</head>
<body>
    <div>
        <h1>Actualizar Persona</h1>
        <?php 
        include_once 'persona.php';
        ?>
        <form action="update.php" method="post" class="bg-white p-6 rounded
shadow-md">
            <input type="hidden" id="dni" name="dni" value="<?php echo
                                                            isset($row['dni']) ? $row['dni'] : ''; ?>" class="border p-2 w-full mb-4">
            <label for="nombres" class="block">Nombres:</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo
                                                                    isset($row['nombres']) ? $row['nombres'] : ''; ?>" class="border p-2 w-full
mb-4">
            <label for="apellidopa" class="block">Apellido Paterno:</label>
            <input type="text" id="apellidopa" name="apellidopa" value="<?php echo isset($row['apellidopa']) ? $row['apellidopa'] : ''; ?>" class="border p-2 w-full mb-4">
            <label for="apellidoma" class="block">Apellido Materno:</label>
            <input type="text" id="apellidoma" name="apellidoma" value="<?php echo isset($row['apellidoma']) ? $row['apellidoma'] : ''; ?>" class="border p-2 w-full mb-4">
            <button type="submit" name="submit" class="bg-blue-500 textwhite px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>

</body>
</html>