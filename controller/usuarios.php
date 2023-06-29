<?php
class Usuarios extends Controller
{

  function __construct()
  {
    parent::__construct();
    parent::connectionSession();

    $this->view->datos = [];
    $this->view->mensaje = "Seccion Usuarios";
    $this->view->mensajeResultado = "";
  }

  function render()
  {
    if (!parent::isAuthenticated()) {
      // Redirigir al inicio de sesión o mostrar un mensaje de error
      header("Location: " . constant('URL') . "usuarios/verLogin");
      exit();
    }

    $datos = $this->model->getUsuarios();
    $this->view->datos = $datos;
    $this->view->render('usuarios/index');
  }

  function crear() //para ver la vista de crear
  {
    if (!parent::isAuthenticated()) {
      // Redirigir al inicio de sesión o mostrar un mensaje de error
      header("Location: " . constant('URL') . "usuarios/verLogin");
      exit();
    }

    $this->view->datos = [];
    $this->view->mensaje = "Crear Usuario";
    $this->view->render('usuarios/crear');
  }

  function insertarUsuario()
  {
    if ($this->model->insertarUsuario($_POST)) {
      $mensajeResultado = '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Nuevo Registro
      </div>';
    } else {
      $mensajeResultado = '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        No se registro
      </div>';
    }

    $this->view->mensajeResultado = $mensajeResultado;
    //var_dump($mensajeResultado);
    $this->render();

  }

  function detalle(){
    if (!parent::isAuthenticated()) {
        // Redirigir al inicio de sesión o mostrar un mensaje de error
        header("Location: " . constant('URL') . "usuarios/verLogin");
        exit();
      }                      
    $this->view->datos = [];
    $this->view->mensaje = "Detalles del Cursos";
    $this->view->render('usuario/detalle');
}

  function verUsuario($param = null)
  {
    if (!parent::isAuthenticated()) {
      // Redirigir al inicio de sesión o mostrar un mensaje de error
      header("Location: " . constant('URL') . "usuarios/verLogin");
      exit();
    }
    $id = $param[0];

    $datos = $this->model->verUsuario($id);
    $this->view->datos = $datos;
    $this->view->mensaje = "Detalle del usuario";
    $this->view->render('usuarios/detalle');
  }

  function actualizarusuario()
  {
    
    
    if ($this->model->actualizarusuario($_POST)) {
      
      $datos = new classUsuarios();
      foreach ($_POST as $key => $value) {
        
        # code...
        $datos->$key = $value;
      }
     
      $mensajeResultado = '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Se actualizo el registro
      </div>';
    } else {
      $mensajeResultado = '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        No se actualizo el registro
      </div>';
    }
    
    $this->view->datos = $datos;
    $this->view->mensajeResultado = $mensajeResultado;
    $this->render();
  }

  function eliminarusuario($param = null)
  {
    $id = $param[0];
    if ($this->model->eliminarusuario($id)) {
      $mensajeResultado = '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Se elimino el Registro
      </div>';
    } else {
      $mensajeResultado = '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        No se elimino el registro
      </div>';
    }
    $this->view->mensajeResultado = $mensajeResultado;
    $this->render();

  }


  function verLogin()
  {
    $this->view->render('usuarios/login');
  }

  function autenticar()
  {
    $arreglo =
      [
        'email' => $_POST['email'],
        'password' => $_POST['password']
      ];

    $user = $this->model->autenticar($arreglo);
    if (isset($user->id)) {
      //session_start();
      $_SESSION['id'] = $user->id;
      $_SESSION['name'] = $user->name;

      $this->view->render('main/index');
    } else {
      $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Datos incorrectos
                </div>';
      $this->view->mensajeResultado = $mensajeResultado;
      $this->view->render('usuarios/login');
    }
  }

  function cerrarSesion()
  {
    session_destroy();
    session_write_close();

    // Redireccionar a la página principal
    header("Location: " . constant('URL') . "main/");
    exit();
  }

  function verRegistro()
  {
    $this->view->render('usuarios/register');
  }

  function registrar()
  {
    if ($_POST['password'] != $_POST['confirmpassword']) {
      $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Las contraseñas no coinciden
                </div>';
      $this->view->mensajeResultado = $mensajeResultado;
      $this->view->render('usuarios/register');
      exit();
    } else {
      $arreglo =
        [
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'password' => $_POST['password']
        ];

      if ($this->model->registrar($arreglo)) {
        $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Registro exitoso
                </div>';
        $this->view->mensajeResultado = $mensajeResultado;
        $this->view->render('usuarios/login');
      } else {
        $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se registro
                </div>';
                $this->view->mensajeResultado = $mensajeResultado;
      $this->view->render('usuarios/register');
      }

    }
  }

}

?>