<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="../public/images/logo.png" alt="Logo" class="logo">
        <h1>Gestión de Empleados</h1>
    </header>
    <div class="container">
        <a href="index.php?action=create" class="btn-agregar">Agregar Nuevo Empleado</a>
        <div class="search-container">
       
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?php echo htmlspecialchars($empleado['id']); ?></td>
                <td><?php echo htmlspecialchars($empleado['nombre']); ?></td>
                <td><?php echo htmlspecialchars($empleado['puesto']); ?></td>
                <td><?php echo htmlspecialchars($empleado['salario']); ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $empleado['id']; ?>" class="table-btn table-btn-edit">Editar</a>
                    <a href="index.php?action=delete&id=<?php echo $empleado['id']; ?>" class="table-btn table-btn-delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>
</html>
