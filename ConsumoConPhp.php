<?php

$curl = curl_init();

$cad = "Ruta_End_Point";
curl_setopt_array($curl, array(
	CURLOPT_URL => $cad,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: Direccion_Host",
		"x-rapidapi-key: "
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$objeto = json_decode($response);

	print_r($objeto);
	/*
	foreach ($objeto as $key => $value) {
	  echo $key;
	  echo $value;
	}
	*/
}
