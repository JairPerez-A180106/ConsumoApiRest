<?php
$identificador=$_POST['nombre'];
$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador");
curl_setopt($sh,CURLOPT_RETURNTRANSFER, TRUE);
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>