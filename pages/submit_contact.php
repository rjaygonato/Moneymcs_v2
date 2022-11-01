<?php  
 
if(isset($_POST['submit_contact'])) {
 $mailto = "rexaban.vaprocareers@gmail.com";  

 $name = $_POST['fullname']; 
 $fromEmail = $_POST['email']; 
 $telnumber = $_POST['telnumber']; 
 $subject = "This is a test email";
 $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; 
 
 $message = "Client Name: " . $name . "\n"
 . "Phone Number: " . $telnumber . "\n\n"
 . "Client Message: " . "\n"  ;
 
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