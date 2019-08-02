<?php
   /* ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "test@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";*/

	if (isset($_POST["submit"])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
		$message = $_POST['message'];
		$human = intval($_POST['human']);
        $from = 'Contact Form'; 
		$to = 'floor.julessegers@hotmail.com'; 
		$subject = 'PHP contact form ';
		
		$body ="From: $firstname\n $lastName\n E-Mail: $email\n Message:\n $message";
		// Check if first name has been entered
		if (!$_POST['firstname']) {
			$errfirstName = 'Please enter your first name';
        }
        //Check if last name has been entered
        if (!$_POST['lastname']) {
			$errlastName = 'Please enter your last name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		/*Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
        }*/
        
// If there are no errors, send the email
if (!$errfirstName && !$errlastName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


