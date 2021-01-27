<?php
ini_set('display_errors', 'on');//'on' à la place du 1;

require_once('vendor/autoload.php');
include("fonctions.php");
$con = BddConnect();
$req = "SELECT nom, address, zip, town, phone, email FROM llx_societe";
$resultat = mysqli_query($con, $req);
$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
  'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
  'server' => 'us7',
]);


while($data = mysqli_fetch_array($resultat))
{
  try {
    $response = $client->lists->addListMember("fa6285ac5c", [
      "email_address" => $data['email'],
      "status" => "subscribed",
      'merge_fields'  => [
        'FNAME'     => $data['nom'],
        'LNAME'     => "",
        'PHONE' => $data['phone'],
        'ZIP'  => $data['zip'],
        'CITY' => $data['town']
      ]
    ]);
  } catch (GuzzleHttp\Exception\ClientException $e) {}

  }
  //print_r($response);







  // $email = $tab['email'];
  // $fname = $tab['firstname'];
  // $lname = $tab['lastname'];
  // $phone = $tab['phone_mobile'];
  // $zip   = $tab['zip'];
  // $city  = $tab['email'];
  // print_r($response);
