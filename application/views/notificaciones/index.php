<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .table {
            width: 100%;
            margin: 20px 0;
            background-color: white;
            border-collapse: collapse;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }
        /* Estilos existentes */
        .container {
            margin-top: 50px;
        }
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: 'Roboto', sans-serif;
        }
        
        
        .btn-add:hover {
            background-color: #0056b3;
        }
        .title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            color: #007bff;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 40px;
            position: relative;
        }
        .title::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 150px;
            height: 5px;
            background: linear-gradient(to right, #007bff, #00d4ff);
            border-radius: 5px;
        }
        .card {
            background-color: #2b2e31;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        
        .badge-danger {
            background-color: #dc3545;
            font-size: 1.1rem;
        }
        .btn-warning, .btn-danger, .btn-primary {
            margin-top: 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 10px 20px;
        }
        .btn-warning {
            background-color: #ffb236;
            border-color: #ffb236;
        }
        .btn-danger {
            background-color: #ff5b5b;
            border-color: #ff5b5b;
        }
        .btn-primary {
            background-color: #0099ff;
            border-color: #0099ff;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .btn-controls button {
            background-color: #333;
            border: none;
            color: white;
            font-size: 1.5rem;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-controls button:hover {
            background-color: #444;
        }
        .btn-controls .fa-pause { color: #ffeb3b; }
        .btn-controls .fa-stop { color: #f44336; }
        .btn-controls .fa-redo { color: #4caf50; }
        /* Estilos para los botones de añadir tiempo */
        .table tbody tr {
    animation: fadeIn 0.5s ease-in-out;
}

.table tbody tr:hover {
    animation: bounce 0.3s ease-in-out;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}
        
    </style>
</head>
<body>
    <h2 class="title">Lista de Notificaciones</h2>
    <a href="<?php echo site_url('Notificacion/create'); ?>" class="btn btn-success">Crear Nueva Notificación</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Mensaje</th>
            <th>Tipo de Alerta</th>
            <th>Intervalo de Tiempo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notificaciones as $notificacion): ?>
            <tr>
                <td><?php echo $notificacion['id']; ?></td>
                <td><?php echo $notificacion['message']; ?></td>
                <td><?php echo $notificacion['alert_type']; ?></td>
                <td><?php echo $notificacion['time_interval']; ?> minutos</td>
                <td>
                    <a href="<?php echo site_url('Notificacion/edit/'.$notificacion['id']); ?>" class="btn btn-warning">Editar</a>
                    <a href="<?php echo site_url('Notificacion/delete/'.$notificacion['id']); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta notificación?');">Eliminar</a>
                    <a href="<?php echo site_url('estaciones'); ?>" class="btn btn-primary">Regresar a Estaciones</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>
