<?php
$to = $_POST["email"];
$subject = "Survival Store Contact Request";
$message = "Thank you for your contact request, {$_POST['fname']} {$_POST['lname']}\nWe will contact you at: {$_POST['email']}";
$from = "WC311@webspace.science.uu.nl";
$headers = "From:" . $from;
// the message


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

mail($to,$subject,$message,$headers);

$myfile = fopen("{$_POST['fname']}.txt", "w") or die("Unable to open file!");
$txt = "Neem contact op met: {$_POST['fname']} {$_POST['lname']}\nOp de Email: {$_POST['email']}";
fwrite($myfile, $txt);
fclose($myfile);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allepaginas.css">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>

<nav>
    <!--Alle links veranderen naar de URL van de server als het op de server komt.-->
    <a href="index.html">Home page</a>
    <a href="contact.html">Contact</a>
    <a href="about_us.html">About us</a>
    <a href="faq.html">FAQ</a>
</nav>



    <h2>Contact</h2>
    <h3>Contactgegevens:</h3>
    <p>survivalshop@gmail.com</p>
    <p>+31 6 69696969</p>
    
    Welcome <?php echo $_POST["fname"]; ?><br>
    Thank you for filling in the form. We will contact you soon on  <?php echo $_POST["email"]; ?><br>
    ~ Survival Store Team
</body>
</html>