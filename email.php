<?php
$message = $_POST["message"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$message = wordwrap($msg,70);

// send email
mail("maritimus987@gmail.com","" . $subject, "" . $email . $message );

print("Success");
?>