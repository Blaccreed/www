<?php
include("fonctions.php");
$con = BddConnect();
$requete = "SELECT lastname, firstname, address, zip, town, email,phone_mobile FROM llx_adherent";
$resultat = mysqli_query($con, $requete);
$file = fopen("f.txt","w");
while($tableau = mysqli_fetch_array($resultat))
{
  $adher =$tableau['lastname'].",".$tableau['firstname'].",".$tableau['address'].",".$tableau['zip'].",".$tableau['town'].",".$tableau['email'].",".$tableau["phone_mobile"]."\n";
  fwrite($file,$adher);
}
fclose($file);
 ?>
