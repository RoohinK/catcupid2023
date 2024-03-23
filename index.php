<?php
include("config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

            
if(isset($_POST["submit"]))
{
    $name1=$_POST["name"];
    $email=$_POST["email"];
    $message1=$_POST["message"];
    $q1="INSERT INTO contact VALUES('$name1', '$email', '$message1')";
    mysqli_query($con,$q1);
       

        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='itsmerooh123@gmail.com';
        $mail->Password='muvcmqakqhdwjcwl';
        $mail->SMTPSecure='ssl';
        $mail->Port=465;
 
        $mail->setFrom('itsmemrooh123@gmail.com');
        $mail->addAddress($email);
        $mail->Subject='catcupid';
        $mail->Body='thank you for contacting us, we will revert asap';

    if($mail->send()) {
        "<script>alert('REGISTRATION SUCCESSFUL');</script>";
            
    } else 
    {
    echo 'Error sending email: ' . $mail->ErrorInfo;

    }
      
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: josefin sans;
            margin:0%;
            padding:0%;
            background-color:#E3E2DF;
            background-image: url('https://img.freepik.com/free-vector/cat-lover-pattern-background-design_53876-100662.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        form {
            max-width: 400px;
            margin-top: 6%;
            margin-left: 34.5%;
            background-color: #fff;
            /* White background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            /* Light gray border */
            border-radius: 20px;
        }

        button {
            background-color: #d2b48c;
            /* Beige button color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #b19065;
            /* Darker beige on hover */
        }

        h2 {
            text-align: center;
            color: #9A1750;
            font-size: 45px;
            top:20%;
            position:sticky;
        }

        input:hover,
        textarea:hover {
            box-shadow: 0 0 5px #b19065;
        }

        input:focus {
            border: 2px solid #b19065;
        }

        .contact {
            text-align: right;
            color: #9A1750;
            text-shadow: 100px;
            position: absolute;
            top: 90%;
            left: 72%;
            background-color: #fff;
            opacity: 0.7;
            height:60px;
        }
        #navbar
        {
            margin-top: 0%;
            width:100%;
            display:flex;
            height: 2.2cm;
            background-color: rgba(255, 255, 255, 0.65);
           
        }
        
        a
    {
    color: #000000;
    font-family: josefin sans;  
    font-size: 20px;
    margin-top: 0.8cm; 
    margin-left: 1.7CM;
    text-decoration:0%;
    font-weight: bold;
    
    }
    a:hover
{
    color:rgb(156, 29, 97);
}
.animated-text {
    animation: slideIn 2s ease forwards;
    overflow: hidden;
}




@keyframes slideIn {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}


        
    </style>
</head>

<body>
    
    <div id="navbar">
        <img src="log3.png" style="width:6%; height:70px; margin-left:2%; margin-top:0.5%;">
        <b style="color: #9A1750; font-family: josefin sans;  font-size: 42px; margin-top: 0.6cm; margin-left: 0.6cm; margin-right:12cm;">CAT CUPID</b>
        
        <a href="structure.php" class="hover-link">HOME</a>
        <a href="AboutUs.php" class="hover-link">ABOUT US</a>
        <a href="Join.php" class="hover-link">JOIN US</a>
        <a href="index.php" class="hover-link">CONTACT US</a>
        
        
        
    </div>
       
    
   
    <form action="index.php" method="post" id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>


</body>

</html>