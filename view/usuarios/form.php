
  <?php if (!$ocultarId): ?>
    <div class="mb-3" hidden>
      <label for="id" class="form-label">Id</label>
      <input type="text" class="form-control" name="id" id="id"
        value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>" readonly>
      <small id="helpId" class="form-text text-muteHelp textd"></small>
    </div>
  <?php endif; ?>

<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" required class="form-control" name="name" id="name" aria-describedby="helpId"
      placeholder="Ingrese el nombre de curso"
      value="<?php echo isset($this->datos->name) ? $this->datos->name : ""; ?>" required>
    <small id="helpId" class="form-text text-muted">Nombre del usuario</small>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" required class="form-control" name="email" id="email" aria-describedby="helpId"
      placeholder="Ingrese la email del usuario"
      value="<?php echo isset($this->datos->email) ? $this->datos->email : ""; ?>" required>
    <small id="helpId" class="form-text text-muted">Email del usuario</small>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input type="password" required
    <?php echo isset($this->datos->password) ? "" : ""; ?>
    class="form-control" 
    name="password" id="password" 
    aria-describedby="helpId"
      placeholder="Ingrese el la contraseña"
      value="<?php echo isset($this->datos->password) ? $this->datos->password : ""; ?>" required>
    <small id="helpId" class="form-text text-muted">Tiempo del Curso</small>
  </div>

  <div class="mb-3">
    <button type="reset" class="btn btn-danger">Limpiar</button>
    ||
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>