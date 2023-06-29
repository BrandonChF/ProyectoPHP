<?php
//session_start();

// Verificar si la sesión está iniciada
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  // La sesión está iniciada
  $isLoggedIn = true;
  $username = $_SESSION['name'];
} else {
  // La sesión no está iniciada
  $isLoggedIn = false;
}

?>

<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark border-bottom box-shadow mb-3">
  <div class="container-fluid">
    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
      <ul class="navbar-nav flex-grow-1">
        <li class="nav-item">
          <a href="<?php echo constant('URL'); ?>main" class="nav-link active">Inicio</a>
        </li>
        <?php if ($isLoggedIn) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos/crear">Crear</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos/crear">Crear</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes/crear">Crear</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profesores</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores/crear">Crear</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios/crear">Crear</a>
            </div>
          </li>
        <?php } ?>
      </ul>
      <ul class="navbar-nav flex-grow-1 justify-content-end">
        <?php if ($isLoggedIn) { ?>
          <li class="nav-item">
            <span class="nav-link">Hola, <?php echo $username; ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/cerrarSesion">Cerrar sesión</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/verLogin">Iniciar sesión</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/verRegistro">Registrarse</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>