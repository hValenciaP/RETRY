<?php
require_once './controladores/usuariosController.php';
require_once './controladores/principalController.php';

require_once './modelos/usuarios.model.php';


$Obj_Principal = new Principal();
$Obj_Principal -> ctrPlantilla();