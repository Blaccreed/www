<?php
require_once('vendor/autoload.php');

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
  'apiKey' => 'f5ea8866c679a73df3849f6cc90f9e41-us7',
  'server' => 'us7'
]);

$response = $mailchimp->ping->get();
print_r($response);


 ?>
