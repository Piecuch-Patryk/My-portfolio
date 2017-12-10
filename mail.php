<?php
// recive posted values;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// build up new email to send;
$subject = 'New e-mail from: ' . $name . '(' . $email . ')';
// where to send it;
$sendTo = 'patrykowo@gmail.com';
// send message to seted email;
mail($sendTo, $subject, $message);
// redirect to confirmation site;
header('Location: confirmation.html');
?>
