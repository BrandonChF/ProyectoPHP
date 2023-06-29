<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="mb-3" <?php echo isset($this->datos->id) ? "" : "hidden"; ?> hidden>
        <label for="" class="form-label">Id</label>
        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" readonly="true" value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>">
        <small id="helpId" class="form-text text-muted"></small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Cedula</label>
        <input type="number" class="form-control" name="cedula" id="cedula" aria-describedby="helpId" required="true" placeholder="Ingresa la cedula del profesor" value="<?php echo isset($this->datos->cedula) ? $this->datos->cedula : ""; ?>">
        <small id="helpId" class="form-text text-muted">cedula aca</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correoelectronico" id="correoelectronico" aria-describedby="helpId" aria-describedby="helpId" required="true" placeholder="Ingresa el correo del profesor" value="<?php echo isset($this->datos->correoelectronico) ? $this->datos->correoelectronico : ""; ?>">
        <small id="helpId" class="form-text text-muted">Correo aca</small>
      </div>
    </div>
    <div class="col-4">
      <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" required="true" placeholder="Ingresa el telefono del profesor" value="<?php echo isset($this->datos->telefono) ? $this->datos->telefono : ""; ?>">
        <small id="helpId" class="form-text text-muted">Telefono aca</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Telefono Celular</label>
        <input type="number" class="form-control" name="telefonocelular" id="telefonocelular" aria-describedby="helpId" required="true" placeholder="Ingresa el Telefono Celular del profesor" value="<?php echo isset($this->datos->telefonocelular) ? $this->datos->telefonocelular : ""; ?>">
        <small id="helpId" class="form-text text-muted">Telefono Celular aca</small>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="mb-3">
        <label for="" class="form-label">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" aria-describedby="helpId" required="true" placeholder="Ingresa la Fecha Nacimiento del profesor" value="<?php echo isset($this->datos->fechanacimiento) ? $this->datos->fechanacimiento : ""; ?>">
        <small id="helpId" class="form-text text-muted">Fecha Nacimiento aca</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <select class="form-control" id="sexo" name="sexo" required="true" value="<?php echo isset($this->datos->sexo) ? $this->datos->sexo : ""; ?>">
          <option value="" disabled="" selected="">
            Seleccione el Sexo
          </option>
          <option value=" Masculino">
            Masculino
          </option>
          <option value="Femenino">
            Femenino
          </option>
          <option value="Indefinido">
            Indefinido
          </option>
        </select>
      </div>
    </div>
    <div class="col-4">
      <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" required="true" placeholder="Ingresa la Direccion del profesor" value="<?php echo isset($this->datos->direccion) ? $this->datos->direccion : ""; ?>">
        <small id="helpId" class="form-text text-muted">Direccion aca</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" required="true" placeholder="Ingresa el nombre del profesor" value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
        <small id="helpId" class="form-text text-muted">Nombre aca</small>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="helpId" required="true" placeholder="Ingresa el Apellido Paterno del profesor" value="<?php echo isset($this->datos->apellidopaterno) ? $this->datos->apellidopaterno : ""; ?>">
        <small id="helpId" class="form-text text-muted">Apellido Paterno aca</small>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="helpId" required="true" placeholder="Ingresa el Apellido Materno del profesor" value="<?php echo isset($this->datos->apellidomaterno) ? $this->datos->apellidomaterno : ""; ?>">
        <small id="helpId" class="form-text text-muted">Apellido Materno aca</small>
      </div>
    </div>
    <div class="col-4">
      <div class="mb-3">
        <label for="" class="form-label">Nacionalidad</label>
        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" required="true" placeholder="Ingresa la  Nacionalidad profesor" value="<?php echo isset($this->datos->nacionalidad) ? $this->datos->nacionalidad : ""; ?>">
        <small id="helpId" class="form-text text-muted">Nacionalidad aca</small>
      </div>
   
      

      <?php

      if (isset($this->datos->idcarreras)) {
        $nombreGrupo = 'Nombre';
        foreach ($this->grupos as $key) {
          if ($this->datos->idcarreras == $key->id) {

            $nombreGrupo = $key->nombre;
            break;
          }
        }
      }

      ?>
      <div class="mb-3">
        <label for="" class="form-label">Grupo</label>
        <select class="form-select form-select-md" value="" name="idcarreras" id="idcarreras" required="true">
          <option value="<?php echo isset($this->datos->idcarreras) ? $this->datos->idcarreras
                              : "Seleccione un grupo"; ?>"> <?php echo isset($this->datos->idcarreras) ? $nombreGrupo
                              : "Seleccione un grupo"; ?> </option>

          <?php
          print($this->grupos);
          //var_dump($this->grupos);
          foreach ($this->grupos as $row) {
            $grupos = new classGrupos();
            $grupos = $row;
            //var_dump($grupos->nombre);
            echo '
                                    <option style="color:black;" value="' . $grupos->id . '"> 
                                    ' . $grupos->nombre . '
                                    </option>
                                ';
          }
          ?>
        </select>
      </div>
    </div>
  </div>
  <div class="mb-3">
    <button type="reset" class="btn btn-danger">Reset</button>
    ||
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>