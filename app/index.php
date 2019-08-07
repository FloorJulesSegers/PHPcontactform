<?php
require 'PHPmailer.php';
require 'PHPerror.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
	<title>PHP contact form</title>
	<link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Us</h1>
				<form class="form-horizontal" role="form" method="post">

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">First name</label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="firstname" placeholder="First Name">
							<?php echo "<p class='text-danger'>$errorfirstName</p>";?>
						</div>
                    </div>

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Last name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name">
							<?php echo "<p class='text-danger'>$errorlastName</p>";?>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
							<?php echo "<p class='text-danger'>$errorEmail</p>";?>
						</div>
					</div>

					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
							<?php echo "<p class='text-danger'>$errorMessage</p>";?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $mail(sent()); ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>


