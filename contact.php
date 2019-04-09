// PHP code for Contact Form
// Followed tutorial by mdbootstrap

<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['comment']))
$comment = $_POST['comment'];

$content="From: $name \n Email: $email \n Comment: $comment";
$recipient = "gmit.winteler@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>