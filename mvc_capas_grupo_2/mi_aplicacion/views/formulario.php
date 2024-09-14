<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($empleado) ? 'Editar Empleado' : 'Agregar Empleado'; ?></title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <header>
        <img src="../public/images/logo.png" alt="Logo" class="logo">
        <h1>Gestión de Empleados</h1>
    </header>
    <div class="container">
        <h2><?php echo isset($empleado) ? 'Editar Empleado' : 'Agregar Empleado'; ?></h2>
        <form action="index.php?action=<?php echo isset($empleado) ? 'edit&id=' . $empleado['id'] : 'create'; ?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo isset($empleado) ? htmlspecialchars($empleado['nombre']) : ''; ?>" required>

            <label for="puesto">Puesto:</label>
            <input type="text" id="puesto" name="puesto" value="<?php echo isset($empleado) ? htmlspecialchars($empleado['puesto']) : ''; ?>" required>

            <label for="salario">Salario:</label>
            <input type="number" id="salario" name="salario" step="0.01" value="<?php echo isset($empleado) ? htmlspecialchars($empleado['salario']) : ''; ?>" required>

            <input type="submit" value="<?php echo isset($empleado) ? 'Actualizar' : 'Agregar'; ?>">
        </form>
    </div>
    
</body>
</html>
