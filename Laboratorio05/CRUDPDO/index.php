<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="create.php">Create New Record</a>
    <div>
        <form method="GET" action="index.php" class="mb-4">
            <input type="text" name="search" class="border p-2 w-full mb-2" placeholder="Buscar...">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
        </form>
        <?php
        include_once 'persona.php';
        $persona = new Persona();
        $search = isset($_GET['search']) ? $_GET['search'] : "";
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
        $start = ($page - 1) * $limit;
        $result = $persona->read($search, $start, $limit);
        $total_records = $persona->count($search);
        $total_pages = ceil($total_records / $limit);
        echo "<table class='min-w-full bg-white'>
            <thead>
                <tr>
                    <th class='py-2 px-4 border-b'>DNI</th>
                    <th class='py-2 px-4 border-b'>Nombres</th>
                    <th class='py-2 px-4 border-b'>Apellido Paterno</th>
                    <th class='py-2 px-4 border-b'>Apellido Materno</th>
                    <th class='py-2 px-4 border-b'>Acciones</th>
                </tr>
            </thead>
            <tbody>";

        foreach ($result as $row) {
            echo "<tr>
                    <td class='py-2 px-4 border-b'>{$row['dni']}</td>
                    <td class='py-2 px-4 border-b'>{$row['nombres']}</td>
                    <td class='py-2 px-4 border-b'>{$row['apellidopa']}</td>
                    <td class='py-2 px-4 border-b'>{$row['apellidoma']}</td>
                    <td class='py-2 px-4 border-b'>
                        <a href='update.php?dni={$row['dni']}' class='text-blue-500'>Editar</a> |
                        <a href='delete.php?dni={$row['dni']}' class='text-red-500' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
                    </td>
                </tr>";
        }
        echo "</tbody></table>";
        echo "<div class='mt-4'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='index.php?page=$i&search=$search' class='bg-blue-500 text-white px-3 py-2 rounded m-1'>$i </a>";
        }
        echo "</div>";
        ?>
    </div>
</body>

</html>
