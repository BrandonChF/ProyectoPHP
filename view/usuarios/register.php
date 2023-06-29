<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid " id="contendorprincipal">

  <div class="tab-content">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">
      <?php echo $this->mensajeResultado ?>
        <h3 class="m-4 text-center">Crear cuenta</h3>

        <form action="<?php echo constant('URL'); ?>usuarios/registrar" method="POST" class="m-4">

          <div class="form-outline mb-4 ">
            <label class="" for=""> Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Brenjuan" required/>
            <!-- <label class="form-label" for="loginName">Email or username</label> -->
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="" for=""> Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="brenjuan@example.com" required/>
            <!-- <label class="form-label" for="loginName">Email or username</label> -->
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="" for=""> Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="" required/>
            <!-- <label class="form-label" for="loginPassword">Password</label> -->
          </div>

          <div class="form-outline mb-4">
            <label class="" for="">Confirmar contraseña</label>
            <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="" required/>
            <!-- <label class="form-label" for="loginPassword">Password</label> -->
          </div>

          <!-- 2 column grid layout -->
          <!-- Submit button -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4">Registrarme</button>
          </div>
        </form>
        <p>¿Ya tienes cuenta? <a href="<?php echo constant('URL'); ?>usuarios/verLogin" class="">Inicar sesión</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>

<?php
require 'view/footer.php';
?>