    <div class="mb-3" <?php echo isset($this->datos->id)? "" :"hidden";?>>
      <label for="" class="form-label">Id</label>
      <input type="text" 
        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" 
        value="<?php echo isset($this->datos->id)? $this->datos->id :"";?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Cédula</label>
      <input type="text" required
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre de curso"
        value="<?php echo isset($this->datos->cedula)? $this->datos->cedula :"";?>">
      <small id="helpId" class="form-text text-muted">Cédula del estudiante</small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="text" required
          class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingrese la descripcion del curso"
          value="<?php echo isset($this->datos->correoelectronico)? $this->datos->correoelectronico :"";?>">
        <small id="helpId" class="form-text text-muted">Correo del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Teléfono</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->telefono)? $this->datos->telefono :"";?>">
        <small id="helpId" class="form-text text-muted">Teléfono del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Celular</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->telefonocelular)? $this->datos->telefonocelular :"";?>">
        <small id="helpId" class="form-text text-muted">Celular del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Fecha de nacimiento</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->fechanacimiento)? $this->datos->fechanacimiento :"";?>">
        <small id="helpId" class="form-text text-muted">Fecha de nacimiento del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->sexo)? $this->datos->sexo :"";?>">
        <small id="helpId" class="form-text text-muted">Sexo del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->direccion)? $this->datos->direccion :"";?>">
        <small id="helpId" class="form-text text-muted">Dirección del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->nombre)? $this->datos->nombre :"";?>">
        <small id="helpId" class="form-text text-muted">Nombre del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Apellido paterno</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->apellidopaterno)? $this->datos->apellidopaterno :"";?>">
        <small id="helpId" class="form-text text-muted">Apellido paterno del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Apellido materno</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->apellidomaterno)? $this->datos->apellidomaterno :"";?>">
        <small id="helpId" class="form-text text-muted">Apellido materno del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Nacionalidad</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->nacionalidad)? $this->datos->nacionalidad :"";?>">
        <small id="helpId" class="form-text text-muted">Nacionalidad del estudiante</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Id carrera</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->idCarreras)? $this->datos->idCarreras :"";?>">
        <small id="helpId" class="form-text text-muted">Id Carrera del estudiante</small>
      </div>
      <div class="mb-3">
            <button type="reset" class="btn btn-danger">Cancelar</button>
            ||
            <button type="submit" class="btn btn-primary">Guardar</button>
      </div>