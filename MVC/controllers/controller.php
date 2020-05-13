<?php
    class MvcController{
        // llamada a la plantilla
        public function pagina(){
            include"vies/template.php";
        }

        // ENLACES
        public function enlacesPaginasController(){
            if(isset( $_GET['action'])){
                $enlaces = $GET['action'];
            }else{
                $enlaces = 'index';
            }
            // Es el momento en que el controlador invoca al modelo llamado enlacesPaginasModel
            //para que muestre el listado de paginas
            $respuesta = Paginas::enlacesPaginasModel($enlaces);
            include $respuesta;
        }
        //Registro de usuarios
        public function registroUsuariosController(){
            if (isset($_POST["usuariosRegistro"])){
                // Recibe a traves del metodo POST el name (html) de usuario, password y Email.
                // se almacenan los datos en una variable o propiedades de tipo array asociativo
                $datosController = array("usuario"==>$_POST["usuarioRegistro"], "password"==>$_POST["passwordRegistro"],
                "email"==>$_POST["emailRegistro"]);
                // se le dice al modelo models/crus.php (Datos::registroUsuarioModel), que en modelo
                //Datos el modelo registroUsuarioModel reciba en sus parametros los valores $datosController
                // y el nombre de la tabla a la cual debe conectarse (usuarios).
                $respuesta = Datos::resitroUsuariosModel($datosController, "usuarios");

                // se imprime la respuesta en la vista
                if($respuesta == "success"){
                    header("location:index.php?action=ok");
                }
                else{
                    header("location:index.php");
                }

            }
        }
        // INGRESO USUARIOS
        public function ingresoUsuarioController(){
            if(isset($_POST["usuarioIngreso"])){
                $datosController = array ("usuario" => $_POST["usuarioIngreso"], 
                                            "password" => $_POST["passwordIngreso",]); 
                $respuesta = Datos::ingresoUsuarioModel($datosController,
                "usuarios");     
                
                // validar la respuesta de modelo para ver si es un usuario correcto.
                if($respuesta["usuario"]==$_POST["usuarioIngreso"]&& $respuesta["password"]==$_POST["passwordIngreso"]){
                    session_start();
                   $_SESSION["validar"] = true;
                   header("location:index.php?action=fallo"); 
                }
            }

        }

        // Vista de usuarios
        public function vistaUsuariosController(){
            $respuesta= Datos::vistaUsuarioModel("usuarios");
            // utilizar un foreach para liberar un array e imprimir la consola del modelo

            forech ($respuesta as $row => $item){
                echo'<tr>
                     <td>'.$item["usuario"].'</td>
                     <td>'.$item["password"].'</td>
                     <td>'.$item["email"].'</td>
                     <td>'<a href="index.php?action=usuarios&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
            }
        }

    }
    


?>