<?php
ini_set('display_errors', 'on');
require_once('vendor/autoload.php');


$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
    'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
    'server' => 'us7',
]);

$response = $client->lists->getListMembersInfo("fa6285ac5c");
print_r($response);



 ?>
