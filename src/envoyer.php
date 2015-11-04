<?php

// Get values from the form
$name=$_POST['name'];
$object=$_POST['object'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];

$to = "contact@clement-marin.xyz";
$subject = $object;
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;


$from = "Blueseodesign";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(@mail($to,$subject,$message,$headers))
{
  //print "<script>document.location.href='http://mon-site/merci.htm';</script>";
  // Created by Future Tutorials
}else{
  echo "Erreur! Veuillez Remplir les Champs Requis.";
}


?>
