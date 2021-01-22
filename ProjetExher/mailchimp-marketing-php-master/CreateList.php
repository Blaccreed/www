<?php
require_once('vendor/autoload.php');

$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
  'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
  'server' => 'us7',
]);

include("fonctions.php");
$con = BddConnect();
$req = "SELECT lastname, firstname, address, zip, town, email,phone_mobile FROM llx_adherent";
$resultat = mysqli_query($con, $requete);

while($tableau = mysqli_fetch_array($resultat))
{
  $tableau['lastname'].",".$tableau['firstname'].",".$tableau['address'].",".$tableau['zip'].",".$tableau['town'].",".$tableau['email'].",".$tableau["phone_mobile"]."\n";
}


$response = $client->lists->batchListMembers("fa6285ac5c", ["members" => $tableau[]);
print_r($response);

// $response = $client->lists->updateList("fa6285ac5c", [
//   "name" => "zeaeatzze",
//   "permission_reminder" => "permission_reminder",
//   "email_type_option" => true,
//   "contact" => [
//     "company" => "rien",
//     "address1" => "rien",
//     "city" => "rien",
//     "state" => "Rire",
//     "zip" => "91000",
//     "country" => "France",
//   ],
//   "campaign_defaults" => [
//     "from_name" => "Calvin",
//     "from_email" => "yapicalvinludo@gmail.com",
//     "subject" => "rien",
//     "language" => "rien",
//   ],
// ]);
// print_r($response);




?>
