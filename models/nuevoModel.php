<?php 

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        
        try{
        
            //echo 'Metedo para Insertar datos asie';
            $query = $this->db->conexion()->prepare('INSERT INTO peliculas (nombre,genero,calidad) VALUES(:nombre,:genero,:calidad)');

            $query->execute(['nombre' => $datos['nombre'], 'genero' => $datos['genero'], 'calidad' => $datos['calidad']]);
            
            return true;

        } catch(PDOException $error){
            	
            //Error 1062 sql duplicate entry
            if($error->errorInfo[1] == 1062){
                //echo 'La pelicula ingresada ya existe';
            }
            return false;
        }
    }

}


?>