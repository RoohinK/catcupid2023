<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="Cat.css">
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
        .img1
        {
            height: 21cm;
            width:100%;
            background-image: url('about2.webp'); 
            background-size: cover;
            opacity:0.9;
            display:flex;
        }

        .img1::before
        {
            content: "";
            position: absolute;

            width: 100%;
            height: 21cm;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.8));
            pointer-events: none; /* Ensure the overlay doesn't interfere with mouse events */
        }
        .img2
        {
            margin-left: 2%;
        }

        .footer
{
    width:100%;
    height:1.5cm;
    margin-top: 3px;
    
    background-color: #9A1750;
    font-size: 20px;
    font-weight: bold;
    display: flex;
}
.foot
{
    margin-top: 15px;
    
    margin-left: 43%;
}
    </style>
    
</head>
<body>
    <div class="img1">
    <div id="navbar">
        <img src="log3.png" style="width:6%; height:70px; margin-left:2%; margin-top:0.5%;">
        <b style="color: #9A1750; font-family: josefin sans;  font-size: 42px; margin-top: 0.6cm; margin-left: 0.6cm; margin-right:12cm;">CAT CUPID</b>
        
        <a href="structure.php" class="hover-link">HOME</a>
        <a href="AboutUs.php" class="hover-link">ABOUT US</a>
        <a href="Join.php" class="hover-link">JOIN US</a>
        <a href="index.php" class="hover-link">CONTACT US</a>
        
        
        
    </div>

    <div style="display: inline-block;">
    <div id="slogan" style="font-family: josefin sans; color:#FFFFFF; margin-top:7cm; margin-left:0.3cm; width:400px; text-align: center; height:90px; " class="animated-text">
        <center>
        <b style="margin-top:30px; opacity:0.7; font-size: 50px;">
        
        ABOUT US
        </b>
        </center>
    </div>

<br>
    <div id="slogan" style="font-family: josefin sans; color:whitesmoke; margin-top:0cm; margin-left:1.1cm; width:345px; text-align: center; height:130px; " class="animated-text">
        <center>
        <i style="margin-top:30px; opacity:0.7; font-size: 27px;">
        WHERE WE STRIVE TO FIND LOVING HOMES FOR CATS IN NEED
        </i>
        </center>
    </div>
    </div>


    <div id="slogan" style="font-family: josefin sans; color:whitesmoke; margin-top:7.2cm; margin-left:19.5cm; width:345px; text-align: center; height:210px; " class="animated-text">
        <center>
        <p style="margin-top:30px; opacity:0.7; font-size: 27px;">
            As a non-profit cat adoption company, our primary goal is to find loving forever homes for every cat in our care while promoting responsible pet ownership.
        </p>
        </center>
    </div>
</div>
<div class="grid-container">
    <div class="rev">
        FOUNDERS & MOTIVATION
    </div>
    <div class="z">
       
We, the students of TSEC found many stray cats roaming around in Bandra aimlessly. Having absolutely no one to look after them, they become famished and fragile. What could be better than helping those furry friends find a home? 
<br>
<br>
Here's a cat that very often comes to our college, Introducing to you, Storm!
</div>
<div style="display: flex; margin-right: 1.7%; padding-bottom: 3%;">
    <center>
    <img class="img2" src="storm1.jpg" width="30%">
    <img class="img2" src="storm4.jpg" width="30%">
    <img class="img2" src="storm3.jpg" width="30%">
    </center>
</div>
</div>



<div class="footer">
    <div class="foot">
    2024 &#169; CAT CUPID
    </div>
</div>
</body>
</html>
