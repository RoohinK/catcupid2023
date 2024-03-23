<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="style.css">
    
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Metal&display=swap" rel="stylesheet">

    

    <style>
        #navbar
        {
            margin-top: 0%;
            width:100%;
            display:flex;
            height: 2.2cm;
            background-color: rgba(255, 255, 255, 0.65);
            position:fixed;
            z-index: 2;
            
           
        }
        #img1
        {
            height: 21cm;
            width:100%;
            background-image: url('back5.webp'); 
            background-size: cover;
            opacity:0.9;
            display:inline-block;
        }
        #img1::before
        {
            content: "";
            position: absolute;

            width: 100%;
            height: 21cm;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.8));
            pointer-events: none; /* Ensure the overlay doesn't interfere with mouse events */
        }
        
        
    </style>
    <title>Document</title>
</head>
<body>
        <div id="img1" >
        <div id="navbar" class="animated-text">
            <img src="log3.png" style="width:6%; height:70px; margin-left:2%; margin-top:0.5%;">
            <b style="color: #9A1750; font-family: josefin sans;  font-size: 42px; margin-top: 0.6cm; margin-left: 0.6cm; margin-right:12cm;">CAT CUPID</b>
            
            <a href="structure.php" class="hover-link">HOME</a>
            <a href="AboutUs.php" class="hover-link">ABOUT US</a>
            <a href="Join.php" class="hover-link">JOIN US</a>
            <a href="index.php" class="hover-link">CONTACT US</a>
            
            
            
        </div>
        <div id="slogan" style="font-family: josefin sans; font-size: 40px;color:#000000; margin-top:9cm; margin-left:2.5cm; border-color: #000000; border-width: 3px; border-style: solid; width:345px; text-align: center; height:130px; " class="animated-text">
            <center>
            <p style="margin-top:30px; opacity:0.7;">
            UNLEASH LOVE,
            <br>
            ADOPT A CAT
            </p>
            </center>
        </div>
        </div>




        <div class="grid1">
        <div class="grid0">

            <div class="process">
                WANT TO ADOPT A MEOW?
            </div>
            <br>
            <div class="process0">
              



            <div style="display: flex;">

            

            <div class="arr">
            </div>
           </div>

               
           <div class="p1">
            <b style="margin-left: 9%;">BROWSE THROUGH THE CATS</b>
        </div>


        <div class="p1">
           <b style="margin-left: 20%;"> FILL OUT OUR FORM </b>
         </div>

                <div class="p1">
                <b style="margin-left: 9%;">VISIT OUR OFFLINE CENTER</b>
                </div>

                <div class="p1">
                <b style="margin-left: 0.6%;">ADOPTION FEES AND PAPERWORK</b>
                </div>

                <div class="p1">
                <b style="margin-left: 8%;">POST-ADOPTION FOLLOW UP</b>
                </div>

                <a href="https://www.comfortzone.com/behavior-blog/new-pet/top-10-tips-for-new-cat-owners">
                <div class="z">
                    
                NEVER OWNED A CAT BEFORE?
                <br>
                &nbsp;&nbsp; NO PROBLEM, CLICK HERE!
                    
                </div>
                </a>
    



            </div>
                
        </div>




        <div class="grid2" id="scrollableDiv">

            <div class="processa">
                TESTIMONIAL
            </div>
            <br>
            <div class="process0">
              



            

           

           <div class="test1">
            <b>"Wonderful Experience, Amazing Staff!"</b>
            <br>
            I recently adopted a cat through this website, and I couldn't be happier with the experience. The staff was incredibly helpful and supportive throughout the entire process.
           </div>

           <div class="test1">
            <b>"Best Decision Ever!"</b>
            <br>
            Adopting a cat through this website was the best decision I ever made. The adoption process was smooth and straightforward.
           </div>


           <div class="test1">
            <b>"Highly Recommend!"</b>
            <br>
             I cannot recommend this website enough for anyone looking to adopt a cat. The website was easy to navigate.
           </div>

           <div class="test1">
           <b> "Great Selection and Service!"</b>
            <br>
            I recently adopted a cat through this website, and I was thoroughly impressed with the selection of cats available for adoption.
           </div>


               
    



            </div>
            <button id="scrollUpButton" style="border:none; background-color: whitesmoke;"><img src="up.png" id="scrollUpArrow" style="height:50px; width:50px;display:block; bottom: 0; margin-left: 6.7cm; cursor: pointer;"></button>

            </div>
        </div>

        </div>



    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const scrollableDiv = document.getElementById('scrollableDiv');
    const scrollUpArrow = document.getElementById('scrollUpArrow');
    let scrollSpeed = 10; // Adjust scroll speed as needed

    // Event listener for scrolling the content
    scrollableDiv.addEventListener('scroll', function() {
        if (scrollableDiv.scrollTop > 0) {
            scrollUpArrow.style.display = 'block';
        } else {
            scrollUpArrow.style.display = 'none';
        }
    });

    // Event listener for clicking the up arrow to scroll up smoothly
    scrollUpArrow.addEventListener('click', function() {
        scrollableDiv.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});





    </script>
        













        

        <div class="grid-container">

            <div class="adopt">
                RESCUED CATS AWAITING THEIR FOREVER HOME
            </div>




            <div class="grid-row">

            <div class="grid-item">
            <p class="name">
            BIRBAL
            </p>
            <p class="age">
            1 YEAR OLD
            </p>
            <img src="cat1.jpg">
            <p class="text">
               Recently rescued from the  
               <br>
               streets, this feline is now
               <br>
               safe but seeks a 
               <br>
               warm and loving home.
            </p>
            </div>


            <div class="grid-item">
            <p class="name">
            PLUTO
            </p>
            <p class="age">
                6 MONTHS OLD
                </p>
            <img src="cat2.jpg" >
            <p class="text">
                Found abandoned, this
                <br>
                cat's rescue story has just
                <br>
                begun, hoping to find 
                <br>
                a caring family soon.
             </p>
            </div>

            <div class="grid-item">
                
            <p class="name">
            FRAPPE
            </p>
            <p class="age">
                2 MONTHS OLD
                </p>
            <img src="cat3.jpg">
            <P class="text">
            Saved from neglect, this
            <br>
            sweet cat's journey to 
            <br>
            find a forever 
            <br>
            home is just starting.
            </P>
            </div>
        
            </div>



            <div class="grid-row">
         
            <div class="grid-item">
            <p class="name">
            MEDUSA
            </p>
            <p class="age">
                2 YEARS OLD
                </p>
            <img src="cat5.jpg">
            <p class="text">
            Plucked from a perilous 
            <br>
            construction site, this
            <br>
            rescued cat seeks stability
            <br>
            and safety.
            </p>
            </div>

            <div class="grid-item">
            <p class="name">
                    NIGHT
            </p>
            <p class="age">
                7 MONTHS OLD
                </p>
            <img src="cat6.jpg" >
            <p class="text">
            Found trapped in a 
            <br>
            discarded appliance, 
            <br>
            this rescued feline dreams 
            <br>
            of a peaceful haven.
            </p>
            </div>

            <div class="grid-item">
            <p class="name">
            MR. GREY
            </p>
            <p class="age">
                1 YEAR OLD
                </p>
            <img src="cat7.jpg">
            <p class="text">
            Rescued from a tree after 
            <br>
            days of meowing, this cat
            <br>
            hopes for a loving owner 
            <br>
            to hear its call.
            </p>
            </div>
        
            </div>

           


            <div class="grid-row">

            <div class="grid-item">
            <p class="name">
            VANILLA
            </p>
            <p class="age">
                1.5 YEARS OLD
                </p>
            <img src="cat8.jpg" width="200px" height="217px">
            <p class="text">
            
            Saved from a tangled 
            <br>
            fence, this cat now
            <br>
            this cat now desires
            <br>
            the freedom of an
            <br>
            open and loving space.
            </p>
            </div>

            <div class="grid-item">
            <p class="name">
            MANGAL
            </p>
            <p class="age">
                10 MONTHS OLD
                </p>
            <img src="cat9.jpg" >
            <p class="text">
            Rescued from a crowded 
            <br>
            shelter, this cat longs
            <br>
            for a quieter and more
            <br> 
            nurturing environment.
            </p>
            </div>

            <div class="grid-item">
            <p class="name">
            PAPAYA
            </p>
            <p class="age">
                3 MONTHS OLD
                </p>
            <img src="cat10.jpg">
            <p class="text">
            Saved from a hoarding
            <br>
            situation, this cat
            <br>
            hopes for individual 
            <br>
            attention in a new home.
            </p>
            </div>
        
        </div>

    

           
        </div>


    <div class="review">
        <div class="rev">
            GALLERY
        </div>

        <div class="t1">
            <div class="img1">
                <img src="rev2.jpg" style="width:500px; height: 281px;">
                <p class="name1">
                    Shreya, 19/01/24
                </p>
            </div>

            <div class="img1">
                <img src="rev1.jpg" style="width:500px; height: 281px;">
                <p class="name1">
                  Girish, 02/02/24
                </p>
            </div>
            
        </div>

        <div class="t1">
            <div class="img1">
                <img src="rev3.jpg" style="width:500px; height: 281px;">
                <p class="name1">
                 Srijan & Komal, 10/02/24
                </p>
            </div>

            <div class="img1">
                <img src="rev6.jpeg" style="width: 225px; height: 281.5px;">
                <p class="name1">
                 Amar, 28/02/24 
                </p>
            </div>

            <div class="img1">
                <img src="rev4.jpg" style="width: 225px; height: 281.5px;">
                <p class="name1">
                 Rudra, 10/03/24
                </p>
            </div>
            
        </div>

        <a class="z1" href="https://mail.google.com/mail/?view=cm&fs=1&to=catcupid749@gmail.com&su=Your%20Subject&body=Your%20Message" target="_blank">
                    
            WANT YOUR MEMORIES TO BE FEATURED? CLICK HERE!
                
        </a>
        <script>
        document.getElementByClass('z1').addEventListener('click', function(event) {
            // Prevent the default action of the anchor element
            event.preventDefault();
            
            // Get the recipient's email address from an input field or any other source
            var recipientEmail = "catcupid749@gmail.com";
            
            // Construct the mailto URL with the recipient's email address
            var mailtoURL = "mailto:" + recipientEmail + "?subject=Your%20Subject&body=Your%20Message";
            
            // Open the user's default email client with the pre-filled email
            window.location.href = mailtoURL;
        });
    </script>
        

        



    </div>

<div class="footer">
    <div class="foot">
    2024 &#169; CAT CUPID
    </div>
</div>