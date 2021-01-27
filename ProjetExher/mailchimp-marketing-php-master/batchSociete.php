<?php
require_once('/path/to/MailchimpMarketing/vendor/autoload.php');

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
    'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
    'server' => 'us7'
]);

$list_id = "fa6285ac5c";

$users = [
    [
        'id' => '1',
        'email' => 'user1@example.com'
    ],
    [
        'id' => '2',
        'email' => 'user2@example.com'
    ],
];

$operations = [];
foreach ($users as $user) {
    $operation = [
        'method' => 'POST',
        'path' => "/lists/$list_id/members",
        'operation_id' => $user['id'],
        'body' => json_encode([
            'email_address' => $user['email'],
            'status' => 'subscribed'
        ])
    ];
    array_push($operations, $operation);
}

try {
    $response = $mailchimp->batches->start($operations);
    echo $response;
} catch (\MailchimpMarketing\ApiException $e) {
    echo $e->getMessage();
}










 ?>
