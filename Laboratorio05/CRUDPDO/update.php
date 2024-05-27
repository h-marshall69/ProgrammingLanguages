<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="modal-title">Actualizar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class="container">
        <h1 class="modal-title">Actualizar Persona</h1>
        <div class="container-sm">
            <?php 
            include_once 'persona.php';
            $persona = new Persona();
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['dni'])) {
                //$persona->dni = $_GET['dni'];
                $result = $persona->read($_GET['dni'], 0, 1);
                //$row = $result;
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $dni = $_POST['dni'];
                $nombres = $_POST['nombres'];
                $apellidopa = $_POST['apellidopa'];
                $apellidoma = $_POST['apellidoma'];
                if ($persona->update($dni, $nombres, $apellidopa, $apellidoma)) {
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
            <div >
                <form action="update.php" method="post" >
                    <div class="mb-3">
                        <?php
                        if (isset($result) && !empty($result)) {
                            $row = $result[0]; // Solo tomamos el primer resultado
                        ?>
                        <input type="hidden" id="dni" name="dni" value="<?php echo isset($row['dni']) ? $row['dni'] : ''; ?>" class="form-control">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" id="nombres" name="nombres" value="<?php echo isset($row['nombres']) ? $row['nombres'] : ''; ?>" class="form-control">
                        <label for="apellidopa" class="form-label">Apellido Paterno:</label>
                        <input type="text" id="apellidopa" name="apellidopa" value="<?php echo isset($row['apellidopa']) ? $row['apellidopa'] : ''; ?>" class="form-control">
                        <label for="apellidoma" class="form-label">Apellido Materno:</label>
                        <input type="text" id="apellidoma" name="apellidoma" value="<?php echo isset($row['apellidoma']) ? $row['apellidoma'] : ''; ?>" class="form-control">
                        <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
                        <?php } else {
                            echo "<div class='mt-4 p-2 bg-red-500 text-white'>No se encontraron datos para mostrar.</div>";
                        }?>
                    </div>
                    
            </form>
            </div>
        </div>
        
        
    </div>

</body>
</html>