<?php

function BddConnect()
{

  $con = mysqli_connect("localhost","root","root","d");
  return $con;
}

// Sample use
// Just pass your array or string and the UTF8 encode will be fixed



?>
