<?php  
include 'includes/session.php';
 
if(isset($_POST['submit_contact'])) {
 $mailto = "concerns.vaprocareers@gmail.com";  

 $name = $_POST['fullname']; 
 $fromEmail = $_POST['email']; 
 $telnumber = $_POST['telnumber']; 
 $messageBox = $_POST['messageBox'];
 $subject = "MoneyMCS Concern";
 
 $message = "Client Name: " . $name . "\n"
 . "Phone Number: " . $telnumber . "\n\n"
 . "Client Message: " . $messageBox .  "\n"  ;
 
 $headers = "From: " . $fromEmail; 
 $result = mail($mailto, $subject, $message, $headers); 

  if ($result) {
    $success = "Your Message was sent Successfully!";
	echo($success);
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
	echo($failed);
  } 
}
?>