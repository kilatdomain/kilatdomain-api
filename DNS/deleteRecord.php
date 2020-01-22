<?php

include '../config.php';

$ch = curl_init();

$client_id = RESELLER_EMAIL;
$client_secret = RESELLER_API_KEY;

$data = [
  'domain' => 'sandbox-kilatdomain.id',
  'host' => 'dns.sandbox-kilatdomain.id',
  'type' => 'A',
  'address' => '127.0.0.1',
];

$params['data'] = $data;

$payload = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, KILATDOMAIN_ENDPOINT . '/dns/delete');

curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
$response = curl_exec($ch);

echo ($response);
