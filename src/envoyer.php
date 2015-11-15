<?php

// Get values from the form
$name=$_POST['name'];
$object=$_POST['object'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];

$to = "contact@clement-marin.xyz";
$subject = $object;
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $monmessage;


$from = $email;
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://clement-marin.xyz/#contact';</script>";
  echo"<script language=\"javascript\">";
  echo"alert(\"Message envoyé à contact@clement-marin.xyz\")";
  echo "</script>";
}else{
  echo "Erreur! Veuillez Remplir les Champs Requis.";
}
?>
