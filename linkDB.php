<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost","root","1234","users");  
  if (mysqli_connect_error()){ //for connection error finding
  die ('There was an error while connecting to database');
  }
    ?>