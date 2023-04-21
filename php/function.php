<?php  
 
if(isset($_POST['mailsubmit'])) {
 $mailto = "prabhjot.sains@gmail.com";  
 
 $name = $_POST['name']; 
 $fromEmail = $_POST['email']; 
 $phone = $_POST['phone']; 
 $msg = $_POST['message']; 
 $conf = "Confirmation: Message was submitted successfully";
 
 //Email body I will receive
 $message = "Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n";
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting me. I will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $msg . "\n\n"
 . "Regards," . "\n" . "- Prabhjot Singh Sains";
 
 //Email headers
 $headers = "From: " . $fromEmail ."\n"
 . "Phone Number: " . $phone . "\n\n"
 . " Message: " . "\n" . $msg;; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $conf, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>