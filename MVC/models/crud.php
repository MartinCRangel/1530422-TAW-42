<?php

    require_once "conexion.php";

    //heredar la clase conexion.php para poder accesar y utilizar
    //la conexion a la base de datos, se extiende cuando se requiere manipular una funcion
    // o metodo, en este caso manipularemos funcion "conectar" de models/conexion.php
    class Datos extends Conexion {

        // Registro de usuarios
        public function registroUsuariosModel ($datosModel, $tabla){

          //prepare()  prepara la sentencia de SQL para que sea ejecutada por el metodo POSStantement.
          // La sentencia de SQL se puede contener desde 0 ejecutar mas parametros. 
            $stmt = Conexion::conectar()->prepare("INSERT INTO $table {usuario, password, email}
            VALUES {:usuario, :password, :email}");

            //bindParam() vincula una variable de PHP a un parametro de sustitucion ocn nombre
            // correspondiente a la sentencia SQLque fue usada para preparar la sentencia.
            $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

            //regresar una respuesta satisfactoria o no
            if($stmt->execute()){

                return "succes";
            }
            else{
                return "error";
            }
            $stmt->close();
        }

    }


?>