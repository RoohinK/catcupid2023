
<?php
include("config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

            
if(isset($_POST["submit"]))
{
    $name=$_POST["sponsorName"];
    $catname=$_POST["catName"];
    $q1="INSERT INTO sponser VALUES('$name', '$catname')";
        if(mysqli_query($con,$q1))
        {
        echo
            "<script>alert('REGISTRATION SUCCESSFUL'); </script>";
            header("Location: Join.php");
        }
      
}
?>