<?php

include '../config.php';

$ch = curl_init();

$client_id = RESELLER_EMAIL;
$client_secret = RESELLER_API_KEY;

$data = [
  'Contact Name' => 'John Doe',
  'Organization' => 'JD',
  'Address Line 1' => 'Jl. Palgenep',
  'Address Line 2' => '',
  'Province' => '',
  'Postal Code' => '40266',
  'Country Code' => 'ID',
  'Email' => 'johndoe@domain.id',
  'Phone' => '8962896289',
];

$params['contactdetails']['Registrant'] = $data;

$payload = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, KILATDOMAIN_ENDPOINT . '/contact/sandbox-kilatdomain.id');

curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
]);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
$response = curl_exec($ch);

echo ($response);
