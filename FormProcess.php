<?php

$email_to = "ammec07@gmail.com"; 
$email_subject = "Earth Bound Beauty Contact Form";

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$City = $_POST['City'];
$ST = $_POST['ST'];
$Zip = $_POST['Zip'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$HairLength = $_POST['HairLength'];
$Services = $_POST['Services'];
$Comments = $_POST['Comments'];

$email_message = "Form details below:\n\n";

$email_message .= "First Name: ".$FirstName."\n";
$email_message .= "Last Name: ".$LastName."\n";
$email_message .= "City: ".$City."\n";
$email_message .= "State: ".$ST."\n";
$email_message .= "Zip: ".$Zip."\n";
$email_message .= "Email: ".$Email."\n";
$email_message .= "Phone: ".$Phone."\n";
$email_message .= "Hair Length: ".$HairLength."\n";
$email_message .= "Services: ".$Services."\n";
$email_message .= "Comments: ".$Comments."\n";

$headers = "From: ".$Email."\r\n";
$headers .= "Reply-To: ".$Email."\r\n";

mail($email_to, $email_subject, $email_message, $headers);

header("Location: contactSent.htm");

?>
