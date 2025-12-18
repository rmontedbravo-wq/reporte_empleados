<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Datos de Empleados</h4>
                <a href="reporte.php" class="btn btn-warning btn-sm">Generar Reporte</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-success text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Salario</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM personal";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while($fila = $resultado->fetch_assoc()) {
                                echo "<tr class='text-center'>
                                        <td>{$fila['id']}</td>
                                        <td>{$fila['nombre']}</td>
                                        <td>{$fila['edad']}</td>
                                        <td>S/ " . number_format($fila['salario'], 2) . "</td>
                                        <td>{$fila['fecha']}</td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center text-muted'>No hay empleados registrados</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
