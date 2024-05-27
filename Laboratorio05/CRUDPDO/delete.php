<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['dni'])) {
    include_once 'persona.php';
    $persona = new Persona();
    $dni = $_GET['dni'];
    if ($persona->delete($dni)) {
        header("Location: index.php?message=deleted");
    } else {
        header("Location: index.php?message=error");
    }
}