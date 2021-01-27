<?php
ini_set('display_errors', 'on');


require_once('vendor/autoload.php');
include("fonctions.php");
$con = BddConnect();
mysqli_set_charset($con, "utf8");
$req = "SELECT * FROM llx_societe";
$resultat = mysqli_query($con, $req);
$mailchimp = new MailchimpMarketing\ApiClient();
$mailchimp->setConfig([
  'apiKey' => '7f72aba290a00e66cd010a38151896d6-us7',
  'server' => 'us7',
]);

$list_id="fa6285ac5c";




// $response = $client->lists->getListMembersInfo("8fef697730");
// $liste=[];
// $memberes = $response->members;
// for($i=0; $i<count($memberes); $i++)
// {
//   $liste[$i] = $memberes[$i]->email_address;
// }
// print_r($liste);
// while($data= mysqli_fetch_array($resultat))
// {
//   //echo $data['nom'] . $data['email'] . '<br>';
//   try {
//     $response = $client->lists->addListMember("8fef697730", [
//       "email_address" => $data['email'],
//       "status" => "subscribed",
//       'merge_fields'  => [
//         'FNAME'     => $data['nom'],
//         'LNAME'     => ""
//       ]
//     ]);
//     print_r($response);
//   } catch (GuzzleHttp\Exception\ClientException $e) {
//     echo  $e->getMessage();
//   }
//    }
  //print_r($response);


$operations = [];
while($data= mysqli_fetch_array($resultat)) {
    $operation = [
        'method' => 'POST',
        'path' => "/lists/$list_id/members",
        'operation_id' => $data['rowid'],
        'body' => json_encode([
            'email_address' => $data['email'],
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
