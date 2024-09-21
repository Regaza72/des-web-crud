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