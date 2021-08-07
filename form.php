<?php
$name = $_POST['name'];
  $cgm = $_POST['cgm'];
  $email = $_POST['email'];
  $mtv = $_POST['mtv'];
  $msg = $_POST['msg'];


$to = "tido@caramellatido.com";
$subject = 'Nuovo messaggio dal sito TIDO';
$message = "Messaggio da $name $cgm:\n $mtv $msg ";
$from = "$email";

// Sending email

if($_POST["name"]) {
    mail("tido@caramellatido.com", $subject, $message, "From: $from" );
}
?>
Grazie 