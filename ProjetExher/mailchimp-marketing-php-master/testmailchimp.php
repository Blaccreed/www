<?php
require_once('vendor/autoload.php');

$mailchimp = new MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
  'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
  'server' => 'us7'
]);

$response = $mailchimp->ping->get();
print_r($response);


 ?>
