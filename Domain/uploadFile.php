<?php

include '../config.php';

$ch = curl_init();

$client_id = RESELLER_EMAIL;
$client_secret = RESELLER_API_KEY;

$file_name_with_full_path = '/your/full/path/file_name.png';

if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file_name_with_full_path, 'image/png');
} else { // 
  $cFile = '@' . realpath($file_name_with_full_path);
}

$data = [
  'file' => $cFile,
  'action' => 'additional', // identity, legality, additional
  'type' => 'Lainnya' // KTP, PASSPORT, SIUP, TDA, AKTA, Surat Kuasa, Lainnya
];

curl_setopt($ch, CURLOPT_URL, KILATDOMAIN_ENDPOINT . '/document/sandbox-kilatdomain.id');

curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
]);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
$output = curl_exec($ch);

echo ($output);
