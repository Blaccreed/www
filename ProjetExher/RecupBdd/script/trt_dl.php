<?php
include("fonctions.php");
$con = BddConnect();
$requete = "SELECT nom, address, zip, town, phone, email FROM llx_societe";
$resultat = mysqli_query($con, $requete);
$file = fopen(".txt","w");
if(isset($_get['click']))
while($tableau = mysqli_fetch_array($resultat))
{
  $adher =$tableau['email'].",".$tableau['nom'].",".$tableau['phone'].",".$tableau['zip'].",".$tableau["town"]."\n";
  fwrite($file,$adher);
}
// readfile($file);

}
?>
