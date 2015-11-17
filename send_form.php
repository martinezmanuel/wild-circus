<?php
$errors = '';
$myemail = 'martinez-manuel@neuf.fr';
if(empty($_POST['name'])  || 
   empty($_POST['country'])||
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
 
$name = $_POST['name']; 
$country = $_POST['country'];
$email_address = $_POST['email']; 
$message = $_POST['message']; 
 
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}if( empty($errors))
 
{
 
$to = $myemail;
 
$email_subject = "Contact form submission: $name";
 
$email_body = "You have received a new message. ".
 
" Here are the details:\n Name: $name \n Country \n $country ".
 
"Email: $email_address\n Message \n $message";
 
$headers = "From: $myemail\n";
 
$headers .= "Reply-To: $email_address";
 
mail($to,$email_subject,$email_body,$headers);
 

 
header('Location: contact.php');
 
}
  ?>