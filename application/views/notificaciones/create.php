<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear notificación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<h2>Crear Notificación</h2>

<form action="<?php echo site_url('Notificacion/store'); ?>" method="post">
    <div class="form-group">
        <label for="message">Mensaje de Notificación:</label>
        <input type="text" name="message" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="alert_type">Tipo de Alerta:</label>
        <select name="alert_type" class="form-control" required>
            <option value="visual">Visual</option>
            <option value="sonora">Sonora</option>
        </select>
    </div>

    <div class="form-group">
        <label for="time_interval">Intervalo de Tiempo (minutos):</label>
        <input type="number" name="time_interval" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="estacion_id">ID de Estación:</label>
        <input type="number" name="estacion_id" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar Notificación</button>
    
    <a href="<?php echo site_url('notificacion'); ?>" class="btn btn-secondary">Regresar a Lista de Notificaciones</a>
</form>
    
</body>
</html>

