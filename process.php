<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$submit = $_POST["submit"];

echo "<pre>";
$email_body = "";
$email_body .= "First Name: " . $fname . "\n";
$email_body .= "Last Name: " . $lname . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Message: " . $submit . "\n";
echo $email_body;
echo "</pre>";

// send email
header("location:thanks.php");
?>
