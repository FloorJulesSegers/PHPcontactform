<?php
	if (isset($_POST["submit"])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$message = $_POST['message'];
		// Check if first name has been entered
		if (!$_POST['firstname']) {
			$errorfirstName = 'Please enter your first name';
        }
        //Check if last name has been entered
        if (!$_POST['lastname']) {
			$errorlastName = 'Please enter your last name';
		}
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errorEmail = 'Please enter a valid email address';
		}
		//Check if message has been entered
		if (!$_POST['message']) {
			$errorMessage = 'Please enter your message';
        }  
    
    }
?>