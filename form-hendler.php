<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                " User Email: $visitor_email.\n".
                " subject: $subject.\n".
                " User message: $message.\n";

$to = 'anice.azim@gmail.com';

$headers = "Form: $emailfrom \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>