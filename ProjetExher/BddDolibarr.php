<?php
include("fonctions.php");
$con = BddConnect();
$requete = "SELECT lastname, firstname, address, zip, town, email,phonemobile FROM llx_adherent";
$resultat = mysqli_query($requete,$con);
$file = fopen("f.txt","w");
while($tableau = mysqli_fetch_array($resultat))
{
  $adher =$ligne['lastname'].",".$tableau['firstname'].",".$tableau['address'].",".$tableau['zip'].",".$tableau['town'].",".$tableau['email'].",".$tableau["phonemobile"]."\n";
  fwrite($file,$adher);
}
fclose($file);

 ?>
