<?php

    include_once 'class/profesores.php';
    include_once 'class/grupos.php';
    class ProfesoresModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function getProfesores(){        
            $items = [];
            try {
                //code...
                $stringSQL = "SELECT * FROM `profesor` order by id DESC;";
                $query = $this->db->connect()->query($stringSQL);

                while ( $row = $query->fetch()){//obtiene todas las filas
                    $item = new classProfesores();

                    foreach ($row as $key => $value) {
                        # code...
                        $item->$key = $value;
                    }
                    array_push($items, $item);
                }
                //var_dump($items);  
                return $items;
            } catch (PDOException $th) {
                //throw $th;
                return [];
            }
        }


        public function getGrupos(){
            $items = [];
    
            try {
                $stringSQL = "SELECT * FROM `grupo` order by id DESC;";
                $query = $this->db->connect()->query($stringSQL);
    
                while ( $row = $query->fetch()){//obtiene todas las filas
                    $item = new classGrupos();
    
                    foreach ($row as $key => $value) {
                        # code...
                        $item->$key = $value;
                    }
                    array_push($items, $item);
                }
                return $items;
                
            } catch (PDOException $th) {
                //throw $th;
                return [];
            }
        }//fin

        //INSERT INTO profesor(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, nacionalidad, usuario, idcarreras) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')
        public function insertarProfesor($datos){
            var_dump($datos);
            try {
                //code...
                $datos['id'] = "0";
                $datos['usuario'] = "BRENJUAN";
                $stringSQL = 'INSERT INTO profesor(
                    id, cedula, correoelectronico, 
                    telefono, telefonocelular, fechanacimiento, 
                    sexo, direccion, nombre, apellidopaterno, 
                    apellidomaterno, nacionalidad, 
                    usuario, idcarreras) VALUES (
                        :id, :cedula, :correoelectronico, 
                        :telefono, :telefonocelular, :fechanacimiento, 
                        :sexo, :direccion, :nombre, :apellidopaterno, 
                        :apellidomaterno, :nacionalidad, :usuario, 
                        :idcarreras);';
                $query = $this->db->connect()->prepare($stringSQL);
                $query->execute($datos);
                return true;

            } catch (PDOException $th) {
                throw $th;
                var_dump($th);
                return false;
            }
        }

        public function verProfesores($id){
            var_dump($_SESSION);
            try {
                $item = new classProfesores();
                //code...
                $stringSQL = "Select * FROM `profesor` where id=:id;";
                $query = $this->db->connect()->prepare($stringSQL);
                $query->execute(['id'=>$id]);

                while ( $row = $query->fetch()){
                    foreach ($row as $key => $value) {
                        $item->$key = $value;
                    // $_SESSION['autenticado'] = true;
                    }
                }
                return $item;
            } catch (PDOException $th) {
                //throw $th;
                return [];
            }           
        }//fin de verProfesores

        public function actualizarProfesor($datos){
                  var_dump($datos);
                    try {
                        $datos['usuario'] = "BRENJUAN";
                        $stringSQL = 'UPDATE profesor SET cedula=:cedula,
                            correoelectronico=:correoelectronico,
                            telefono=:telefono, 
                            telefonocelular =:telefonocelular, 
                            fechanacimiento =:fechanacimiento, sexo =:sexo, 
                            direccion=:direccion, nombre=:nombre, 
                            apellidopaterno=:apellidopaterno, 
                            apellidomaterno=:apellidomaterno, 
                            nacionalidad=:nacionalidad, idcarreras=:idcarreras, 
                            usuario=:usuario WHERE id=:id ;';
                        $query = $this->db->connect()->prepare($stringSQL);
                        $query->execute($datos);
                        return true;
            
                    } catch (PDOException $th) {
                        throw $th;
                        var_dump($th);
                        return false;
                    }
            }//fin de actualizar
               
        //eliminarProfesor
        public function eliminarProfesor($id){        
            try {            
                $stringSQL = "DELETE FROM `profesor` WHERE id =:id;";
                $query = $this->db->connect()->prepare($stringSQL);
                $query->execute(['id'=>$id]);
                
                return true;
            } catch (PDOException $th) {
                //throw $th;
                var_dump($th);
                return false;
            }           
        }//fin de eliminar

    }
