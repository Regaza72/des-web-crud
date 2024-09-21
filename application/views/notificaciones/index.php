<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notificaciones</title>
    <style>
        /* Estilos existentes */
        .container {
            margin-top: 50px;
        }
        .btn-add {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
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
        .card-title {
            color: #00d4ff;
        }
        .card-text {
            color: #bfbfbf;
        }
        .badge-success {
            background-color: #28a745;
            font-size: 1.1rem;
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
        .timer {
            font-size: 2.5rem;
            font-weight: bold;
            color: #00d4ff;
            margin-top: 1px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .btn-controls {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
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
        .btn-time-adjust {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }
        .btn-time-adjust button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 5px 15px;
            margin: 0 5px;
            border-radius: 20px;
            cursor: pointer;
        }
        .btn-time-adjust button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Lista de Notificaciones</h2>

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
                    <a href="<?php echo site_url('Notificacion/delete/'.$notificacion['id']); ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
