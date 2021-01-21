<?php

function BddConnect()
{
  $con = mysqli_connect("localhost","root","root","dolibarr");
  return $con;
}
 ?>
