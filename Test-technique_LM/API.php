<?php

$lmb = curl_init();
	try {
		curl_setopt($lmb, CURLOPT_URL, "https://evaluation-technique.lundimatin.biz/api/auth");
		curl_setopt($lmb, CURLOPT_HEADER, array(
			"Content-type: application/json",
			"Accept: application/api.rest-v1+json"
		));
		curl_setopt($lmb, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($lmb, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($lmb, CURLOPT_SSL_VERIFYPEER, false); //J'ai mis false en attendant de le remplacer par mon certificat 
		
		$response = curl_exec($lmb);
		
	    if (curl_errno($lmb)) {
			echo curl_error($lmb);
			die();
		}
		
		$http_code = curl_getinfo($lmb, CURLINFO_HTTP_CODE);
		if($http_code == intval(200)){
			echo $response;
		}
		else{
			echo "Ressource introuvable : " . $http_code;
		}
} catch (\Throwable $data) {
	throw $data;
} finally {
curl_close($lmb);
}