<?php

  $db=mysqli_connect("localhost","root","", "library 1"); /*emri i serverit  username , 
  password , database name*/

  if(!$db)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

echo "Connected succesfully.";
?>