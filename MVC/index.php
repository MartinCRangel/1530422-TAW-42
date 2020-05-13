// en el index  mostraremos las salidas al ususario, y a traves de el
mostraremos las diferentes

<?php

// invocacion a los metodos 
require_once ="models/enlaces.php";
require_once ="models/crud.php";
require_once ="models/crudProd.php";

//Controlador
// creacion de los objetos, que es la logica del negocio
require_once ="controllers/controller.php";

// muestra la funcion o metodo "pagina " que se encuentra en controllers/controller.php
$mvc->pagina();


?>
