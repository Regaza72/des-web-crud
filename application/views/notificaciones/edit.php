<h2>Editar Notificación</h2>

<form action="<?php echo site_url('Notificacion/update/'.$notificacion['id']); ?>" method="post">
    <div class="form-group">
        <label for="message">Mensaje de Notificación:</label>
        <input type="text" name="message" class="form-control" value="<?php echo $notificacion['message']; ?>" required>
    </div>

    <div class="form-group">
        <label for="alert_type">Tipo de Alerta:</label>
        <select name="alert_type" class="form-control" required>
            <option value="visual" <?php if ($notificacion['alert_type'] == 'visual') echo 'selected'; ?>>Visual</option>
            <option value="sonora" <?php if ($notificacion['alert_type'] == 'sonora') echo 'selected'; ?>>Sonora</option>
        </select>
    </div>

    <div class="form-group">
        <label for="time_interval">Intervalo de Tiempo (minutos):</label>
        <input type="number" name="time_interval" class="form-control" value="<?php echo $notificacion['time_interval']; ?>" required>
    </div>

    <div class="form-group">
        <label for="estacion_id">ID de Estación:</label>
        <input type="number" name="estacion_id" class="form-control" value="<?php echo $notificacion['estacion_id']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Notificación</button>
    <a href="<?php echo site_url('notificacion'); ?>" class="btn btn-secondary">Regresar a Lista de Notificaciones</a>
</form>