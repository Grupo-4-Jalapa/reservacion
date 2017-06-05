<?php

include_once("funciones_generales.php");

switch ($opcion) {
    case 'registro':

    	$valores=array();
    	$valores["pers_nombre1"]=$txt_nombre1;
    	$valores["pers_nombre2"]=$txt_nombre2;
    	$valores["pers_apellido1"]=$txt_apellido1;
    	$valores["pers_apellido2"]=$txt_apellido2;
    	$valores["pers_cui"]=$txt_cui;
    	$valores["pers_nit"]=$txt_nit;
    	$valores["pers_email"]=$txt_email;
    	$valores["pers_telefono"]=$txt_telefono;
    	$valores["pers_fecha"]=$txt_fecha;

    	$id_persona= insertar("persona",$valores);

        $valores2=array();
        $valores2["usu_nombre"]=$txt_usuario;
        $valores2["usu_pass"]=$txt_pass;
        $valores2["usu_persona_id"]=$id_persona;
        $valores2["usu_no_tarjeta"]=$txt_tarjeta;
        $valores2["usu_bco_tarjeta"]=$txt_banco;
   

        $id_usuario = insertar("usuario",$valores2);
        
        

    break;
    
    default:
        # code...
        break;
}

?>
