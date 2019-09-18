# PHP Contact Form

Processing a contact form with HTML for the visuals and a backend script for the data and to compose an email message for the client.



## Installing
I used [Composer](https://getcomposer.org/)  and used the GitHub [PHPMailer](https://github.com/PHPMailer/PHPMailer) tutorial to install it

```
composer require phpmailer/phpmailer
```

You have to use your gmail adress and password. (Hide your password in the code for safety reasons).

## Getting started

### HTML
 The visual form was made in HTML and the framework [Bootstrap](https://getbootstrap.com/).

![Screenshot from 2019-08-07 12-00-54](https://user-images.githubusercontent.com/49682756/62614170-29e28280-b90b-11e9-8ef8-80acc587005a.png)



### PHP

* PHPerror file

Example of an error message used in the file

```
if (!$_POST['firstname']) {
	$errorfirstName = 'Please enter your first name';
}
```

* PHPmailer file

I used a Gmail account to get my mails

```
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
```

## Project link

I used Heroku to display the form

https://phpcontactform.herokuapp.com/








