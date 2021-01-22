<?php
require_once('vendor/autoload.php');

$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
    'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
    'server' => 'us7',
]);

$response = $client->lists->batchListMembers("list_id", ["members" => [[]]]);
print_r($response);
