<?php
class Estudiantes extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->grupos = [];
        $this->view->mensaje = "Seccion Estudiantes";
        $this->view->mensajeResultado = "";        
    }
    function render(){

        if (!parent::isAuthenticated()) {
            // Redirigir al inicio de sesión o mostrar un mensaje de error
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }

        $datos = $this->model->getEstudiantes();               
        $this->view->datos = $datos;
        $this->view->render('estudiantes/index');
    }

    function crear(){
        
        if (!parent::isAuthenticated()) {
            // Redirigir al inicio de sesión o mostrar un mensaje de error
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }
          //para ver la vista                   
        $this->view->datos = [];
        $grupos = $this->model->getGrupos();
        $this->view->grupos = $grupos;
        $this->view->mensaje = "Crear Estudiante";
        $this->view->render('estudiantes/crear');
    }

    function insertarEstudiante(){
        //var_dump($_POST);
        if ($this->model->insertarEstudiante($_POST)){
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
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
        $this->view->render('cursos/detalle');
    }

    function verEstudiante( $param = null ){  
        
        if (!parent::isAuthenticated()) {
            // Redirigir al inicio de sesión o mostrar un mensaje de error
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }


        $id = $param[0];

        $datos = $this->model->verEstudiantes($id);        
        $this->view->datos = $datos;
        $grupos = $this->model->getGrupos();
        $this->view->grupos = $grupos;
        $this->view->mensaje = "Detalle del estudiante";
        $this->view->render('estudiantes/detalle');
    }

    //actualizarcurso
    function actualizarestudiante(){
        //var_dump($_POST);
        if ($this->model->actualizarestudiante($_POST)){

            $datos = new classEstudiantes();

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualizacion de Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se actualizo el Registro
                </div>';
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle estudiante";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }    

    //eliminarcurso
    function eliminarestudiante( $param = null ){   
        $id = $param[0];
        if ($this->model->eliminarestudiante($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }
}

?>