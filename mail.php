<?php
// recive posted values;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// check if values aren't empty strings;
if ($name === ""|| $email === "" || $message === "") {
    header('Location: form_empty.php');
} else {
// build up new email to send;
$subject = 'New e-mail from: ' . $name . '(' . $email . ')';
// where to send it;
$sendTo = 'patrykowo@gmail.com';
// send message to seted email;
mail($sendTo, $subject, $message);
// redirect to confirmation site;
header('Location: confirmation.php');
}
?>
