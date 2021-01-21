<?php
$con = BddConnect();
$requete = "SELECT * FROM llx_adherent";
$resultat = mysqli_query($requete,$con);
$file = fopen("fichier.txt","w");
while($tableau = mysqli_fetch_array($resultat))
{
  //aucune récuépration
}


 ?>
