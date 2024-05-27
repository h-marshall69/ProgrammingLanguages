<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-dark text-white">
    <div class="container-md">
        <h1>Listado de Personas</h1>
        <div class="mb-3">
            <a href="create.php" class="btn btn-success">Create New Record</a>
        </div>
        <div class="mb-3">
            <form method="GET" action="index.php" >
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar..." aria-label="Buscar...">
                    <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Buscar</button>
                </div>   
            </form>
        </div>
        <?php
        include_once 'persona.php';
        $persona = new Persona();
        $search = isset($_GET['search']) ? $_GET['search'] : "";
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        $start = ($page - 1) * $limit;
        $result = $persona->read($search, $start, $limit);
        $total_records = $persona->count($search);
        $total_pages = ceil($total_records / $limit);
        echo "<table class='table table-light table-hover'>
            <thead>
                <tr>
                    <th scope='col'>DNI</th>
                    <th scope='col'>Nombres</th>
                    <th scope='col'>Apellido Paterno</th>
                    <th scope='col'>Apellido Materno</th>
                    <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>";

        foreach ($result as $row) {
            echo "<tr>
                    <td >{$row['dni']}</td>
                    <td >{$row['nombres']}</td>
                    <td >{$row['apellidopa']}</td>
                    <td >{$row['apellidoma']}</td>
                    <td >
                        <a href='update.php?dni={$row['dni']}' class='text-blue-500'>Editar</a> |
                        <a href='delete.php?dni={$row['dni']}' class='text-red-500' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
                    </td>
                </tr>";
        }
        echo "</tbody></table>";
        echo "<div class='btn-toolbar' role='toolbar'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='index.php?page=$i&search=$search' class='btn btn-secondary'>$i </a>";
        }
        echo "</div>";
        ?>
    </div>
</body>

</html>
