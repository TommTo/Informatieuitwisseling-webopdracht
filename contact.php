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



    <h2>h2 (omdat het moet)</h2>
    <h3>Contactgegevens:</h3>
    <p>survivalshop@gmail.com</p>
    <p>+31 6 69696969</p>
    
    Welcome <?php echo $_POST["fname"]; ?><br>
    Thank you for filling in the form. We will contact you soon on  <?php echo $_POST["email"]; ?><br>
    ~ The flashlight team
</body>
</html>