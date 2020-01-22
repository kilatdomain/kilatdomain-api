<?php

include '../config.php';

$ch = curl_init();

$client_id = RESELLER_EMAIL;
$client_secret = RESELLER_API_KEY;

$data = [
  'regperiod' => 1,
  'nameserver1' => 'ns1.sandbox-kilatdomain.id',
  'nameserver2' => 'ns2.sandbox-kilatdomain.id',
  'nameserver3' => '',
  'nameserver4' => '',
  'nameserver5' => '',
  'email' => 'johndoe@domain.id' // email contact
];

$params['data'] = $data;

$payload = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, KILATDOMAIN_ENDPOINT . '/renew/sandbox-kilatdomain.web.id');

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
