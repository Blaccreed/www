<?php

function BddConnect()
{
  $con = mysqli_connect("localhost","root","root","dolibarr");
  if(!$con)
  {
    die('Erreur:'.mysqli_connect_error());
  }
  else
  {
    return $con;
  }
}
 ?>
Z
