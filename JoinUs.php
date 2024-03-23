
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="JoinUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Young+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>
<body >
    <div id="navbar" class="">
        <img src="logolol.png" style="width:6%; height:70px; margin-left:2%; margin-top:0.5%;">
        <b style="color: #9A1750; font-family: josefin sans;  font-size: 42px; margin-top: 0.6cm; margin-left: 0.6cm; margin-right:12cm;">CAT CUPID</b>
        
        <a href="structure.php" class="hover-link">HOME</a>
        <a href="AboutUs.php" class="hover-link">ABOUT US</a>
        <a href="JoinUs.php" class="hover-link">JOIN US</a>
        <a href="index.php" class="hover-link">CONTACT US</a>
        
        
        
    </div>
    
        <div class="container">
            <h1>Join Us - Help Cats in Need</h1>
            <p>Choose how you want to support our feline friends!</p>
            <div class="options">
                <div class="option donate">
                    <h2>Donate</h2>
                    <p>Contribute to our cause financially.</p><br>
                    <form id="donationForm" action="donate.php" method="post">
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" name="fullName" required>
                        <label for="donationAmount">Enter donation amount:</label>
                        <input type="text" id="donationAmount" name="donationAmount" required>
                        <input type="submit" value="Donate Now" class="popupBtn" name="submit">
                    </form>
                </div>
                <div class="option adopt">
                    <h2>Adopt</h2>
                    <p>Give a loving home to a cat in need.</p><br>
                    <form action="#">
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" name="fullName" required>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
                        <input type="submit" value="Adopt Now">
                    </form>
                </div>
                <div class="option sponsor">
                    <h2>Sponsor</h2>
                    <p>Provide ongoing support for a specific cat.</p><br>
                    <form action="sponser.php" id="sponsorForm" method="post">
                        <label for="sponsorName">Your Name:</label>
                        <input type="text" id="sponsorName" name="sponsorName" required>
                        <label for="catName">Cat's Name to Sponsor:</label>
                        <input type="text" id="catName" name="catName" required>
                        <input type="submit" value="Sponsor Now" class="popupBtn" name="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="visit-section dabba">
            <h1>Visit Our Offline Centers</h1><br>
            <p>Visit our offline centers to avail the same services and volunteer with us!</p><br>
            <img src="triplets.jpg"
                alt="Visit Our Center" class="visit-image">
            <p>Rejoice your day spending with cats, experiencing the joy and companionship they bring.</p><br>
            <a href="#"  class="visit-button">Visit Now</a>
        </div>
        <div class="volunteer-info dabba">
            <h1>Volunteer With Us</h1><br>
            <p>Volunteers play a crucial role in caring for our cats and maintaining our centers. If you're passionate
                about cats and want to make a difference, join us as a volunteer!</p>
            <p>Tasks include feeding, grooming, playing with cats, cleaning facilities, and assisting visitors.</p>
            <p>No prior experience required. Training will be provided.</p>
            <p>Contact us to learn more and sign up!</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSek-ItU4f8FrePNNUvcLqiotLgPxcMmxDpCz6iWOjDTDDKFyw/viewform?usp=sf_link"
                class="enroll-button">Enroll Now</a>
        </div>
    
        <div id="popup" class="popup">
            <img src="qrcode.jpg" style="width:65%; margin-top: 0%; margin-left: 17%;">
            <br>
            <button id="closeBtn" style="margin-left:44%;">Close</button>
            <br>
            <br>
            <b style="margin-left:16%;">please click 'donate now' to confirm donation</b>
        </div>

        <script>
            
var popup = document.getElementById("popup");
var closeBtn = document.getElementById("closeBtn");
var popupBtns = document.querySelectorAll(".popupBtn");

// Function to display the pop-up window
function openPopup() {
    popup.style.display = "block";
}
 // When any of the buttons are clicked, display the pop-up window
 popupBtns.forEach(function(btn) {
                btn.addEventListener("click", openPopup);
            });
        


// When the close button is clicked, hide the pop-up window and store its state
closeBtn.addEventListener("click", function() {
    popup.style.display = "none";
    localStorage.setItem("popup_closed", "true");
});
var flag=0;
document.getElementById("donationForm").addEventListener("submit", function(event) {
    if(flag==0){
    event.preventDefault(); // Prevent default form submission
    flag =1;



    openPopup(); // Show the pop-up window

    }
});

var flag1=0;
document.getElementById("sponsorForm").addEventListener("submit", function(event) {
    if(flag1==0){
    event.preventDefault(); // Prevent default form submission
    flag1 =1;



    openPopup(); // Show the pop-up window

    }
});



        </script>
        
    
</body>
</html>