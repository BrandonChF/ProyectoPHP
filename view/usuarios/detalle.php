<?php
require 'view/header.php';
require 'view/menu.php';
?>

<div class="container-fluid" id="contenedorprincipal">
  <h1>
    <?php echo $this->mensaje; ?>
  </h1>
  <div>
    <?php echo $this->mensajeResultado; ?>
  </div>
  <form class="form-control" action="<?php echo constant("URL"); ?>usuarios/actualizarusuario" method="POST">
    <?php
    $ocultarId = false; // Variable para mostrar el campo "id" desactivado
    require 'form.php';
    ?>
  </form>
</div>

<?php
require 'view/footer.php';
?>