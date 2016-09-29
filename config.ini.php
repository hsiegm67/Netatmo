<?php
$intext=$_GET['intext'];

$password="dein password";
$username="deine email";
$app_id = "deine ID";
$app_secret = "dein token ";

$token_url = "https://api.netatmo.net/oauth2/token";
$postdata = http_build_query(
        array(
            'grant_type' => "password",
            'client_id' => $app_id,
            'client_secret' => $app_secret,
            'username' => $username,
            'password' => $password
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);
$response = file_get_contents($token_url, false, $context);

$params = null;
$params = json_decode($response, true);

$url_devices = "https://api.netatmo.net/api/getstationsdata?access_token=".$params['access_token'];
$resulat_device = file_get_contents($url_devices);
$array = json_decode($resulat_device,true);
?>
