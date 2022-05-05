<form action="controllers/Workspace/create.php" method="post" style="max-width:40%" autocomplete="off">
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input name="name" type="text" aria-label="name" class="form-control" required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text">Descripción</span>
        <textarea name="description" class="form-control" rows="2" cols="80" style="resize:none;"></textarea>
    </div>
    <br>
    <span>Seleccione un color de card</span>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio1" value="blue" checked>
        <label class="form-check-label" for="inlineRadio1"><button class="btn btn-info" style="background-color: #2A59A5; border-color:#2A59A5; color: white;" disabled></button></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="purple">
        <label class="form-check-label" for="inlineRadio2"><button class="btn btn-info" style="background-color: #8047b9; border-color:#8047b9; color: white;" disabled></button></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="color" id="inlineRadio3" value="red">
        <label class="form-check-label" for="inlineRadio3"><button class="btn btn-info" style="background-color: #BA2222; border-color:#BA2222; color: white;" disabled></button></label>
      </div>
      <br><br>
      <input type="submit" name="submit" class="btn btn-success" value="Crear">
</form>
