<form action="Workspace/update.php" method="post" style="width: 100%" autocomplete="off">
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input name="name" type="text" aria-label="name" class="form-control" value="<?php echo $workspace->getName(); ?>"required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text">Descripción</span>
        <textarea name="description" class="form-control" rows="2" cols="80" style="resize:none;"><?php echo $workspace->getDescription(); ?></textarea>
    </div>
    <br>
    <span>Seleccione un color de card</span>
    <br>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio1" value="blue" <?php echo $workspace->getColor()=="blue" ? "checked" : "" ?>>
        <label class="form-check-label" for="inlineRadio1"><button class="btn btn-info" style="background-color: #2A59A5; border-color:#2A59A5; color: white;" disabled></button></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="purple" <?php echo $workspace->getColor()=="purple" ? "checked" : "" ?>>
        <label class="form-check-label" for="inlineRadio2"><button class="btn btn-info" style="background-color: #8047b9; border-color:#8047b9; color: white;" disabled></button></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio3" value="red" <?php echo $workspace->getColor()=="red" ? "checked" : "" ?>>
        <label class="form-check-label" for="inlineRadio3"><button class="btn btn-info" style="background-color: #BA2222; border-color:#BA2222; color: white;" disabled></button></label>
      </div>
      <br><br>
      <input type="hidden" name="workspace_id" value="<?php echo $workspace->getWorkspace_id(); ?>">
      <input type="submit" name="submit" class="btn btn-success" value="Actualizar">
      <a href="#" onclick="delete_record(<?php echo $workspace->getWorkspace_id(); ?>)" class="btn btn-danger">Eliminar</a>
</form>
