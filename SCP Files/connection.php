<?php
 
   //Create Database credential variables
   $user = "a3000273_user";
   $password = "Toiohomai1234";
   $db = "a3000273_SCP_Files";
 
   //Create php db connection object
   $connection = new mysqli("localhost", $user, $password, $db) or die(mysqli_error($connection));
 
   //Get all data from table and save in a variable for use on our page application
   $result = $connection->query("select * from SCP_Subjects") or die($connection->error());
 
 
 
?>
