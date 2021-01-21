<?php
$con = BddConnect();
$requete = "SELECT * FROM llx_adherent";
$resultat = mysqli_query($requete,$con);

while($tableau = mysqli_fetch_array($resultat))
{

}


 ?>
