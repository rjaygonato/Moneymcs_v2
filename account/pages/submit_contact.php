<?php  
include 'includes/session.php';
 
if(isset($_POST['submit_contact'])) {
 $mailto = "info@moneymcs.com";  

 $name = $_POST['fullname']; 
 $fromEmail = $_POST['email']; 
 $telnumber = $_POST['telnumber']; 
 $messageBox = $_POST['messageBox'];
 $subject = "MoneyMCS Contact";

 if(empty($messageBox)){
  $_SESSION['error'] = 'Please dont leave the form blank';
			header('location: contacts');
			return;
 }
 else{
 
 $message = "Client Name: " . $name . "\n"
 . "Phone Number: " . $telnumber . "\n\n"
 . "Email: " . $email . "\n\n"
 . "Client Message: " . $messageBox .  "\n"  ;
 
 $headers = "From: " . $fromEmail; 
 $result = mail($mailto, $subject, $message, $headers); 

  if ($result) {
    $_SESSION['success'] = "Your Message was sent Successfully!";

  } else {
    $_SESSION['error'] = "Sorry! Message was not sent, Try again Later.";
	
  }
} 
}
?>