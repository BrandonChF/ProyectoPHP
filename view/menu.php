<ul class="nav nav-tabs bg-dark" id="navId" role="tablist">
<li class="nav-item">
  <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Crear</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos/crear">Crear</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes/crear">Crear</a>
  </div>
</li>
</ul>