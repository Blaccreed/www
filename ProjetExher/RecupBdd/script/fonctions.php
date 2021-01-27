<?php

function BddConnect()
{
  $con = mysqli_connect("localhost","root","root","d");
  return $con;
}
 ?>
