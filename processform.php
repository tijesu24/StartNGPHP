<?php 

echo '<h1>Check for the file</h1>'; 
$name = $_POST['name'];
$email =  $_POST['email']; 
$message = $_POST['message']; 

$filename = $name.'.txt';

$myfile = fopen($filename, "w");

$toSave =  "Name: ".$name."\r\n"."Email: ".$email."\r\n\r\n\r\nMESSAGE\r\n".$message;
fwrite($myfile, $toSave);

exit; 

?>