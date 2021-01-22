<?php

require_once('vendor/autoload.php');

$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
    'apiKey' => 'YOUR_API_KEY',
    'server' => 'YOUR_SERVER_PREFIX',
]);

$response = $client->lists->updateList("list_id", [
    "name" => "name",
    "permission_reminder" => "permission_reminder",
    "email_type_option" => true,
    "contact" => [
        "company" => "company",
        "address1" => "address1",
        "city" => "city",
        "state" => "state",
        "zip" => "zip",
        "country" => "country",
    ],
    "campaign_defaults" => [
        "from_name" => "from_name",
        "from_email" => "Madge_Hills@gmail.com",
        "subject" => "subject",
        "language" => "language",
    ],
]);
print_r($response);



 ?>
