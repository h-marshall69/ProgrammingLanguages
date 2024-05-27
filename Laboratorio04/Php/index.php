<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentavocalica</title>
    <style>
        /* Estilos para el cuerpo del formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #222; /* Cambiar el color de fondo a oscuro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el formulario */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease; /* Agregamos una animación al formulario */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Estilos para los inputs */
        input[type="text"] {
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Estilos para el botón */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease; /* Agregamos una transición al botón */
        }

        /* Estilos para el botón al pasar el cursor sobre él */
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilos para el placeholder del input */
        ::placeholder {
            color: #999;
        }

        /* Estilos para el mensaje de salida */
        .output-message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            color: #fff;
            font-size: 18px;
            text-align: center;
        }

        /* Estilos para el mensaje de salida cuando la palabra es pentavocálica */
        .output-message.success {
            background-color: #28a745;
        }

        /* Estilos para el mensaje de salida cuando la palabra no es pentavocálica */
        .output-message.error {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="word" placeholder="Ingrese una palabra">
        <button type="submit">Enviar</button>
        <?php
        include 'pentavocalica.php';
        if (isset($_POST['word']) and 'word' != "") {
            $word = $_POST['word'];
            $detector = new PentavocalicDetector();
            if ($detector->isPentavocalic($word)) {
                echo "<div class='output-message success'>La palabra '$word' es pentavocálica.</div>";
            } else {
                echo "<div class='output-message error'>La palabra '$word' no es pentavocálica.</div>";
            }
        } else {
            echo "<div class='output-message'>Ingrese una palabra.</div>";
        }
        
        ?>
    </form>
</body>

</html>
