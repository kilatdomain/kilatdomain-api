<?php

include('../config.php');

$ch = curl_init();

$client_id = RESELLER_EMAIL;
$client_secret = RESELLER_API_KEY;

$data = [
  'sld' => 'sandbox-kilatdomain',
  'tld' => 'web.id',
  'regperiod' => 1,
  'ns1' => 'ns1.sandbox-kilatdomain.id',
  'ns2' => 'ns2.sandbox-kilatdomain.id',
  'ns3' => '',
  'ns4' => '',
  'ns5' => '',
  'firstname' => 'John',
  'lastname' => 'Doe',
  'companyname' => 'JD',
  'email' => 'johndoe@domain.id',
  'address1' => 'Jl. Palgenep',
  'address2' => '-',
  'city' => 'Kabupaten Bandung',
  'state' => '',
  'postcode' => '40266',
  'country' => 'ID',
  'countrycode' => 'ID',
  'fullphonenumber' => '8962896289',
];

$params['data'] = $data;

$payload = http_build_query($params);

curl_setopt($ch, CURLOPT_URL, KILATDOMAIN_ENDPOINT . '/register');

curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
]);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

echo ($response);
