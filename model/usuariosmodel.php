<?php
include_once 'class/usuarios.php';

class UsuariosModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuarios()
    {
        $items = [];

        try {

            //#SELECT id, name, email, password FROM user WHERE 1
            $stringSQL = "SELECT id, name, email, password FROM `user` order by id DESC";
            $query = $this->db->connect()->query($stringSQL);

            while ($row = $query->fetch()) { //obtiene todas las filas de la consulta
                $item = new classUsuarios();
                foreach ($row as $key => $value) {
                    # code..
                    $item->$key = $value; //asigna los valores a la variable $item
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function insertarUsuario($datos)
    {
        //insertar datos
        try {
            //code
            $datos['id'] = "0";
            //Generar el hash de la contraseña
            $hash = password_hash($datos['password'], PASSWORD_DEFAULT);
            //Asignar el hash a los datos
            $datos['password'] = $hash;
            $stringSQL = 'INSERT INTO user(id, name, email, password) VALUES (:id,:name,:email,:password)';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function verUsuario($id)
    {
        try {
            $item = new classUsuarios();
            $stringSQL = "SELECT * FROM `user` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);
            while ($row = $query->fetch()) { //obtiene la fila de la consulta
                foreach ($row as $key => $value) {
                    # code..
                    $item->$key = $value; //asigna los valores a la variable $item
                }
            }
            return $item;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function actualizarusuario($datos)
    {
        //actualizar datos
        try {
            //code
            $hash = password_hash($datos['password'], PASSWORD_DEFAULT);
            //Asignar el hash a los datos
            $datos['password'] = $hash;
            $stringSQL = 'UPDATE `user` SET name=:name,email=:email,password=:password WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }


    public function eliminarusuario($id)
    {

        try {
            $stringSQL = "DELETE FROM `user` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function autenticar($datos)
    {
        $item = new classUsuarios();

        $queryString = "SELECT `id`, `name`, `email`, `password` 
          FROM `user` 
          WHERE `email` = :email; "; // No es necesario verificar el hash en la consulta SQL

        $query = $this->db->connect()->prepare($queryString);
        $query->execute(['email' => $datos['email']]);

        try {
            while ($row = $query->fetch()) {
                if (password_verify($datos['password'], $row["password"])) {
                    $item->id = $row["id"];
                    $item->name = $row["name"];
                    $item->email = $row["email"];
                    $item->password = $row["password"];
                }
            }

            return $item;
        } catch (PDOException $th) {
            return [];
        }
    }

    public function registrar($datos)
    {
        //insertar datos
        try {
            //code
            $datos['id'] = "0";
            // Generar el hash de la contraseña
            $hash = password_hash($datos['password'], PASSWORD_DEFAULT);
            // Asignar el hash a los datos
            $datos['password'] = $hash;

            $stringSQL = 'INSERT INTO user(id, name, email, password) VALUES (:id,:name,:email,:password)';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}//fin de la clase 
