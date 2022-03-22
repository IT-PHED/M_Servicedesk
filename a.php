<?php
session_start();

    $rb=$_GET['rb'];
	$sort=$_GET['sort'];
	$route_id=$_GET['route_id'];
		 
$ch = curl_init();
$certificate_location = 'cacert.pem';


curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/ViewAllRequest");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "reportedby=".$rb."&sort=".$sort."&route_id=".$route_id);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true); //decode the JSON response

 ?>
