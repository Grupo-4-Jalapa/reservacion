<?php

include_once("funciones_generales.php");

//var_dump($_POST);
$imprimir = 0;
switch ($opcion) {
    case 'reservar':

    	$valores=array();
        foreach ($asientos as $key => $asiento) {
    	$valores["boleto_persona_id"]=$persona_idpk;
    	$valores["boleto_horario_bus_id"]=$boleto_bus;
    	$valores["boleto_asiento"]=$asiento;
    

    	$id_reserva= insertar("boleto",$valores,$imprimir);
        }

        redireccionar("reservar.php?alert=1",$imprimir);
             
    break;

    case 'eliminar':
        $boleto_bus = dec($boleto_bus);
       
        $id_elimina= eliminar("boleto","boleto_id='$boleto_bus'",$imprimir);


        redireccionar("reservaciones.php?alert=1",$imprimir);
             
    break;
    
    default:
        # code...
        break;
}

?>
