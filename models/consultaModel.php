<?php

require_once 'models/pelicula.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){

        $peliculas = [];

        try {
            $consulta = $this->db->conexion()->query('SELECT * FROM peliculas');

            // while ($columna = $consulta->fetch()) {

                // $pelicula = new Pelicula();
                // $pelicula->id = $columna['pelicula_id'];
                // $pelicula->nombre = $columna['nombre'];
                // $pelicula->genero = $columna['genero'];
                // $pelicula->calidad = $columna['calidad'];

            //     array_push($peliculas, $pelicula);
            // }

            //Evaluar diferencia con el foreach al terminar

            foreach ($consulta as $llave) {

                $pelicula = new Pelicula();
                $pelicula->id = $llave['pelicula_id'];
                $pelicula->nombre = $llave['nombre'];
                $pelicula->genero = $llave['genero'];
                $pelicula->calidad = $llave['calidad'];

                array_push($peliculas, $pelicula);
            }

            return $peliculas;

        } catch (PDOException $error) {

            return [];
        }
    }

    public function getById($id){

        $pelicula = new Pelicula();

        $consulta = $this->db->conexion()->prepare("SELECT * FROM peliculas WHERE pelicula_id = :id");

        try {

            $consulta->execute(['id' => $id]);

            // while ($columna = $consulta->fetch()) {

            //     $pelicula->id = $columna['pelicula_id'];
            //     $pelicula->nombre = $columna['nombre'];
            //     $pelicula->genero = $columna['genero'];
            //     $pelicula->calidad = $columna['calidad'];
            // }

            foreach($consulta as $llave){

                $pelicula->id = $llave['pelicula_id'];
                $pelicula->nombre = $llave['nombre'];
                $pelicula->genero = $llave['genero'];
                $pelicula->calidad = $llave['calidad'];
            }

            return $pelicula;

        } catch (PDOException $error) {

            return [];
        }
    }

    public function update($datos){

        $consulta = $this->db->conexion()->prepare("UPDATE peliculas SET genero = :genero, calidad = :calidad WHERE pelicula_id = :pelicula_id");

        try {

            $consulta->execute([
                'genero' => $datos['genero'],
                'calidad' => $datos['calidad'],
                'pelicula_id' => $datos['pelicula_id']
            ]);

            return true;

        } catch (PDOException $error) {

            return false;
        }
    }

    public function delete($id){

        $consulta = $this->db->conexion()->prepare("DELETE FROM peliculas WHERE pelicula_id = :id");

        try {

            $consulta->execute(['id' => $id]);

            return true;

        } catch (PDOException $error) {

            return false;
        }
    }
}

?>