<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">    
    <h1><?php echo $this->mensaje;?></h1>
    <form class="form-control" action="<?php echo constant('URL'); ?>estudiantes/insertarEstudiante" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
require 'view/footer.php';
?>