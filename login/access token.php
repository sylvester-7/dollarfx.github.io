<?php 
//mpesa api keys
$consumerKey= "3EcPTAPxnYtYS0TqPI3PtebFNLEYNShCzfscy7ghylpNBo9a";
$consumerSecret="dGNtBRmyRuOdbfoCr5vGC1KV7ioJ5oF1kjohpejhvO77sAgIfGEGAqlRVAxaO4rb";
//access token url
$access_token_url= "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials"; 
$headers=""; 
$curl= curl_init($access_token_url); 
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerKey);
$result = curl_exec ($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

$result = json_decode($result);
 $access_token =$result->$access_token;
curl_close($curl);