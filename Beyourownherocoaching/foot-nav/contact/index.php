<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
 //Collect the data sent from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    
    //Check the fields that they are not empty
    if (empty($name) || empty ($email) || empty($subject) || empty($message)){$errors[fields] = 'Woah there partner! You need to fill in all them there fields!';
    }
  
   
    //Check that the captcha code matched the picture
   if($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
  $errors['security'] = '...? are you sure you are a human? Why dont you try that captcha code once more.';
 }
 
 //If there are errors, return to the contact page and fix them
 if(!empty($errors)){
     include 'contact.php';
     exit;
    }
      //assemble the message
    $finalmessage = "Name: $name \n";
    $finalmessage .= "Email: $email \n";
    $finalmessage .= "Subject: $subject \n";
    $finalmessage .= "Message: \n $message";
    
    //send the message
    $to = 'katebise@gmail.com';
    $from = "From:$email";
    $result = mail($to, $subject, $finalmessage, $from);
    
    //let sender know what  happned
   if ($result == TRUE) {
       $errors[] ="Thank you $name, for messaging me!";
   } else {
       $errors[] = "Whoops! There was an error in sending your message. Sorry!";
   }
   //remove all values previously stored
   unset($name);
   unset($email);
   unset($subject);
   unset($message);
   unset($captcha);
   
   //display the contact page with the new message
   include 'contact.php';
   exit;
   
} else {
 include 'contact.php';
 exit;
}
?>