<?php

include_once("funciones_generales.php");

$imprimir = 0;
switch ($opcion) {
    case 'registro':

    	$valores=array();
    	$valores["pers_nombre1"]=$txt_nombre1;
    	$valores["pers_nombre2"]=$txt_nombre2;
    	$valores["pers_apellido1"]=$txt_apellido1;
    	$valores["pers_apellido2"]=$txt_apellido2;
    	$valores["pers_cui"]=$txt_cui;
    	$valores["pers_nit"]=$txt_nit;
    	$valores["pers_telefono"]=$txt_telefono;
    	$valores["pers_fecha_nac"]=$txt_fecha;

    	$id_persona= insertar("persona",$valores,$imprimir);

        $valores2=array();
        $valores2["persona_id"]=$id_persona;
        $valores2["user"]=$txt_usuario;
        $valores2["pass"]=$txt_pass;
        $valores2["email"]=$txt_email;
   
        $id_usuario = insertar("usuario",$valores2,$imprimir);

        redireccionar("login.php",$imprimir);
             
    break;

     case 'actualizar':

        $valores=array();
        $valores["pers_nombre1"]=$txt_nombre1;
        $valores["pers_nombre2"]=$txt_nombre2;
        $valores["pers_apellido1"]=$txt_apellido1;
        $valores["pers_apellido2"]=$txt_apellido2;
        $valores["pers_cui"]=$txt_cui;
        $valores["pers_nit"]=$txt_nit;
        $valores["pers_telefono"]=$txt_telefono;
        $valores["pers_fecha_nac"]=fecha_e($txt_fecha);

        $id_persona= actualizar("persona",$valores,"pers_id = '$persona_idpk'",$imprimir);

        redireccionar("perfil.php?alert=1",$imprimir);
             
    break;
    
    default:
        # code...
        break;
}

?>
