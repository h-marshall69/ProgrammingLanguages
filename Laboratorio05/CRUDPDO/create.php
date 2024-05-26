<?php
require_once 'persona.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidopa = $_POST['apellidopa'];
    $apellidoma = $_POST['apellidoma'];

    $persona = new Persona();
    if ($persona->create($dni, $nombres, $apellidopa, $apellidoma)) {
        header("Location: index.php?message=created");
        exit();
    } else {
        echo "<div'>No se pudo crear la persona.</div>";
    }
}
?>
<form action="create.php" method="post">
    <input type="text" id="dni" name="dni" placeholder="DNI">
    <input type="text" id="nombres" name="nombres" placeholder="Nombres">
    <input type="text" id="apellidopa" name="apellidopa" placeholder="Apellido P">
    <input type="text" id="apellidoma" name="apellidoma" placeholder="Apellido M">
    <button type="submit" name="submit">Create</button>
</form>
