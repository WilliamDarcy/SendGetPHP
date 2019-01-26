<?php

$url = "http://bts-sio.azurewebsites.net/";


//les lignes ci-dessous permettent d'ajouter des paramètres au GET
//$dataArray = array("s"=>'PHP CURL');
//$data = http_build_query($dataArray);
//$getUrl = $url."?".$data;

//curl est une bibliothèque pour envoyer des messages HTTP
$ch = curl_init();


curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);

//envoie de la requête http
$response = curl_exec($ch);
 
if(curl_error($ch)){
	echo 'Request Error:' . curl_error($ch);
}
else
{
    //affichage de la réponse sur l'écran du navigateur
	echo htmlspecialchars($response);
}
 
curl_close($ch);
