<ul class="nav nav-tabs" id="navId" role="tablist">
<li class="nav-item">
  <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Crear</a>
    <a class="dropdown-item" href="#tab3Id">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#tab4Id">Action</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos/crear">Crear</a>
    <a class="dropdown-item" href="#tab3Id">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#tab4Id">Action</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes/crear">Crear</a>
  </div>
</li>
<li class="nav-item" role="presentation">
  <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
</li>
<li class="nav-item" role="presentation">
  <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
</li>
</ul>