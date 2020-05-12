<?php 
$params = json_decode(file_get_contents('php://input'),true);
header('Content-type: application/json; charset=UTF-8');

//Necesitas recibir por parametros las fechas puedes usar ya sea el $_POST o $_GET
//enviar a parte las dos fechas y no hacerlo como lo hice 
if (isset($params[0]["fechas"])) {
	$arrayFecha = array();
	$arrayDias = array();
	$date_array = array();
	for($i=0; $i < count($params[0]["fechas"]); $i++) { 
		$arrayFecha[$i] = date('Y-m-d', strtotime($params[0]["fechas"]["fecha".$i]));
	}
	for ($j=0; $j < count($params[1]["dias"]); $j++) { 
		$arrayDias[$j] = $params[1]["dias"][$j];
	}
}
for($j = 0; $j<count($arrayDias); $j++){
	
	$inicioDate = $arrayFecha[0];

	$finalDate = $arrayFecha[1];
	$finalDate = strtotime($finalDate);
	for($i = strtotime($arrayDias[$j]["id"], strtotime($inicioDate)); $i <= $finalDate; $i = strtotime('+1 week', $i)){
			$date_array[]=$arrayDias[$j]["nombre"] ." ".date('Y-m-d',$i);
	}
	
}
 echo json_encode(array('response' => $date_array));

 ?>