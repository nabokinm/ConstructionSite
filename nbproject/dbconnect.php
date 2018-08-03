<?php
function OpenCon()
 {
 $dbhost = "isc353_4.encs.concordia.ca";
 $dbuser = "isc353_4";
 $dbpass = "Qazxsw23";
 $db = "isc353_4";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>