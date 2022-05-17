<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$accessTokenURL = "https://access.sandbox.checkout.com/connect/token";
$clientId = 'ack_ioyasynbmpwezoizbtstajdxka';
$clientSecret = 'GcQ0taurXlozWlSHKXCO4e33KSm_9Ye3O9IhXg7Uib7WAn2XDMEl2m0dLeKcuiPeDRW-ik4Y3Y5BZSk9LA0dig';

// POST Request to get AccessToken
$ch = curl_init();
$headers = [
    'Content-Type' => 'application/x-www-form-urlencoded'
];

$fields = array(
    'grant_type' => 'client_credentials',
    'client_id' => $clientId,
    'client_secret' => $clientSecret,
    'scope' => 'gateway');

curl_setopt($ch, CURLOPT_URL, $accessTokenURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

// The post response
$response = json_decode($server_output, true);

// Print access token response to screen
echo($response['access_token']);

curl_close($ch);

exit();

