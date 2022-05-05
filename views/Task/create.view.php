<form action="Task/create.php" method="post" style="width: 100%" autocomplete="off">
    <div class="input-group">
        <span class="input-group-text">Título</span>
        <input name="title" type="text" aria-label="name" class="form-control" required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text">Descripción</span>
        <textarea name="description" class="form-control" rows="2" cols="80" style="resize:none;"></textarea>
    </div>
    <br>
    <input type="hidden" name="workspace_id" value="<?php echo $workspace->getWorkspace_id(); ?>">
    <input type="submit" name="submit" class="btn btn-success" value="Crear">
</form>
