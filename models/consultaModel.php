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

            while($columna = $consulta->fetch()){
                
                $pelicula = new Pelicula();
                $pelicula->nombre = $columna['nombre'];
                $pelicula->genero = $columna['genero'];
                $pelicula->calidad = $columna['calidad'];

                array_push($peliculas,$pelicula);
            }

            //Evaluar diferencia con el foreach al terminar

            // foreach ($consulta as $llave) {
            //      $peliculas[] = $llave;
            // }

            return $peliculas;

        } catch (PDOException $error) {
            return [];
        }
    }

}


?>