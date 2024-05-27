<?php
//my mpesa api key
$consumerKey = "GBkLSMnxpskdvBCC6luGum3Tu4RXeEh1KzgN19J2tQU0aOGc";
$consumerSecret = "t8TBdlWELRAdGMplLhqrdQv8nFIWgCY1Os7ZBb4Hq2rsA5eELW6h0yCLaIU7qjWt";
//access token url
$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$headers = ['Content-Type:application/json; charset-utf8'];
$curl = curl_init($access_token_url);
curl_setopt_array($curl, array(
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HEADER => FALSE,
    CURLOPT_USERPWD => $consumerKey . ':' . $consumerSecret
));
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;

// Close cURL session
curl_close($curl);
?>