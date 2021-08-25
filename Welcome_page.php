<?php
include_once 'loginserve.php';
include_once 'dbh.inc.php';

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$email = $_POST['mail'];
$p = $_POST['p'];
$phone = $_POST['phone'];
$area = $_POST['area'];
$street = $_POST['street1'];
$Building = $_POST['building1'];
$Apartment = $_POST['apartment'];
$Floor = $_POST['floor1'];
$Lamrk = $_POST['landm'];
$CPass =$_POST['Cp'];
$Aphone= $_POST['altphone'];

if(empty($fn) || empty($ln) || empty($email) || empty($p) || empty($phone) || empty($area) || empty($street) || empty($Building) || 
empty($Apartment) || empty($Floor) || empty($Lamrk) ){
    
  echo "<script type='text/javascript'>alert('Error go back and try again');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $fn)){

      echo "<script type='text/javascript'>alert('Enter your first name');document.location='signup.html';</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $ln)){
      echo "<script type='text/javascript'>alert('Enter your last name');document.location='signup.html'</script>";
exit; 
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "<script type='text/javascript'>alert('Enter your Email');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]\w{7,14}$/", $p)){
      echo "<script type='text/javascript'>alert('Enter your Password');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^\d{11}$/", $phone)){
      echo "<script type='text/javascript'>alert('Enter your Phone');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $area)){
      echo "<script type='text/javascript'>alert('Enter your area');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $street)){
      echo "<script type='text/javascript'>alert('Enter your street');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[0-9]+$/", $Building)){
      echo "<script type='text/javascript'>alert('Enter your Building');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[0-9]+$/", $Apartment)){
      echo "<script type='text/javascript'>alert('Enter your Apartment');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[0-9]+$/", $Floor)){
      echo "<script type='text/javascript'>alert('Enter your Floor');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $Lamrk)){
      echo "<script type='text/javascript'>alert('Enter your LandMark');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]\w{7,14}$/", $CPass)){
      echo "<script type='text/javascript'>alert('Enter the same password');document.location='signup.html'</script>";
exit; 
}
else if(!preg_match("/^[0-9]+$/", $Aphone)){
      echo "<script type='text/javascript'>alert('Enter your Alternative Phone');document.location='signup.html'</script>";
exit; 
}

$sql = "INSERT INTO accounts (FName,LName,Email,Password,Phone,
Area,Street,BNo,ApNo,Floor,LandMark,CPass,APhone)
 VALUES 
 ('$fn','$ln'
,'$email','$p','$phone','$area','$street','$Building','$Apartment',
'$Floor','$Lamrk','$CPass','$Aphone');";

$sql1="INSERT INTO userpass(user,pass) VALUES ('$email','$p')";

mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome To Transmicro </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet"
   type = "text/css"
   href = "Css/Welcome_page.css" />
       
         <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
            function openForm1() {
              document.getElementById("myForm1").style.display = "block";
            }
            
            function closeForm1() {
              document.getElementById("myForm1").style.display = "none";
            }
            function openForm2() {
              document.getElementById("myForm2").style.display = "block";
            }
            
            function closeForm2() {
              document.getElementById("myForm2").style.display = "none";
            }

        </script>
    </head>
    <body>

        <div id="head">
            <img id="logo" src="004.png" alt="Shipping">
            <button class="btn"><i class="fa fa-home"></i> Home</button>
            <button class="btn" onclick="openForm1()"><i class="fa fa-bars"></i> Services</button>
            <button class="btn" onclick="openForm()"><i class="fa fa-phone"></i> Contact</button>
            <button class="btn" onclick="openForm2()"><i class="fa fa-info-circle"></i> About Us!!</button>
            <br>
            <label id="wo" ><i class="fa fa-truck"></i> <strong> "<span id="sp">EGYPT'S</span> LARGEST SHIPPING COMPANY" </strong><i class="fa fa-truck"></i></label>  
            <br>
        </div>
        <br><br><br>
        <hr>
        <img src="FONT0020.png" alt="title" id="img">
        <br>
        <label style="float: center;" id="l"><b id="Red"> TransMicro : </b>A Comapny makes it's easy for you to send and receive any kind of <b>package</b> at any time and any place with the most comfortable way.</label><br> 
        <br>
        <!---buttons to log in and sign up -->
        <div id="buttons">
            <a href="Login.php"> <button type="button" > Log-in </button></a>
            <a href="signup.html"><button type="button"> Sign Up </button> </a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 id="headlineprice"><i class="fa fa-money"></i> Shipping Fees</h1>
        <br>
        <br>
        <br>
        <div id="shippingfee">
            <div id="BTBPRICE">
                <form id="Priceform" >
                    <h1 id="formhead" > <i class="fa fa-arrow-circle-right"></i> BTB Price</h1>
                    <table id="btbp" >
                        <tr>
                            <td><strong>From:</strong></td>
                            <td><strong>To:</strong></td>
                            <td id="p"><strong>Price:</strong></td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Cairo</td>
                            <td>50 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Giza</td>
                            <td>75 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>ALex</td>
                            <td>100 EGP</td>
                        </tr>
                        <tr>
                            <td>Alex</td>
                            <td>Giza</td>
                            <td>75 EGP</td>
                        </tr>
                        <tr>
                            <td>Custom</td>
                            <td>Custom</td>
                            <td>150 EGP</td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="BTCPRICE">
                <form id="Priceform" >
                    <h1 id="formhead"> <i class="fa fa-arrow-circle-right"></i> BTC Price</h1>
                    <table id="btbp" >
                        <tr>
                            <td><strong>From:</strong></td>
                            <td><strong>To:</strong></td>
                            <td id="p"><strong>Price:</strong></td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Cairo</td>
                            <td>50 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Giza</td>
                            <td>120 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>ALex</td>
                            <td>150 EGP</td>
                        </tr>
                        <tr>
                            <td>Alex</td>
                            <td>Giza</td>
                            <td>170 EGP</td>
                        </tr>
                        <tr>
                            <td>Custom</td>
                            <td>Custom</td>
                            <td>200 EGP</td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="CTCPRICE">
                <form id="Priceform" >
                    <h1 id="formhead"> <i class="fa fa-arrow-circle-right"></i> CTC Price</h1>
                    <table id="btbp" >
                        <tr>
                            <td><strong>From:</strong></td>
                            <td><strong>To:</strong></td>
                            <td id="p"><strong>Price:</strong></td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Cairo</td>
                            <td>100 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>Giza</td>
                            <td>125 EGP</td>
                        </tr>
                        <tr>
                            <td>Cairo</td>
                            <td>ALex</td>
                            <td>200 EGP</td>
                        </tr>
                        <tr>
                            <td>Alex</td>
                            <td>Giza</td>
                            <td>125 EGP</td>
                        </tr>
                        <tr>
                            <td>Custom</td>
                            <td>Custom</td>
                            <td>150 EGP</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="footer">
            <div class="inner">
               <div class="logo"><img id="footerlogo" src="004.png" alt="logo"></div>              
               <div class="footer-content">
                   <h1>Need Help ?!</h1>
                   <a href="terms_of_use.html">Terms & conditions</a>
                   <a href="Privacy_policy.html">Privacy Policy</a>
                   <br>
                   <h1>Services</h1>
                   <p>Business To Business Shipping</p>
                   <p>Business To Client Shipping</p>
                   <p>Client To Client Shipping</p>
               </div>                
               <div class="footer-content">
                <h1>Contact Us</h1>
                <li><a href="#"><i class="fa fa-phone" id="footericon"> +201140846608</i></a></li>
                <li><a href="#"><i class="fa fa-envelope-o" id="footericon"> Transmicro@gmail.com</i></a></li>
                <p id="hot">Hotline available 24 hours</p>
                <br>
                <h1>Quick Links</h1>
                <a href="Login.php" id="quick">Login</a>
                <a href="signup.html" id="quick">Sign-Up</a>     
                </div> 
               <div class="footer-content">
                    <h1>Follow Us !!</h1>
                    <li><a href="#"><i class="fa fa-facebook" id="footericon"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" id="footericon"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" id="footericon"></i></a></li>
                    <li><a href="#"><i class="fa fa-telegram" id="footericon"></i></a></li>
                    <br>
                    <br>
                    <h1><li><a href="#"><i class="fa fa-map-marker" id="footericon"></i></a></li> Address</h1>
                    <span>
                        4th Industrial Zone ,<br>
                        Banks Complex،<br>
                        Second 6th of October,<br>
                        Giza Governorate. <br>
                    </span>               
                </div>                
            </div>
        </div>
        

<div class="form-popup" id="myForm">
  <form class="form-container1">
    <h1>Contact us :</h1>
    <p style="color: rgb(223, 27, 27);"><b>Email : Transmicrocompany@gmail.com</b></p><br>
    <p style="color: rgb(223, 27, 27);"><b>Call us: +201140846608</b></p><br>
    <button type="button" id="closebtn" onclick="closeForm()">Close</button>
  </form>
</div>
<div class="form-popup" id="myForm1">
    <form class="form-container1">
      <h1>Services:</h1>
      <li><p style="color: rgb(223, 27, 27);"><b>Business To Business Shipping "BTB" </b></p><br></li>
      <li><p style="color: rgb(223, 27, 27);"><b>Business To Client "BTC"</b></p><br></li>
      <li><p style="color: rgb(223, 27, 27);"><b>Client To Client "CTC"</b></p><br></li>
      <button type="button" id="closebtn" onclick="closeForm1()">Close</button>
    </form>
  </div>
  <div class="form-popup" id="myForm2">
    <form class="form-container1">
      <h1>About Us!</h1>
      <p style="color: rgb(223, 27, 27);width: 300px;"><b>Transmicron is a shipping creative company ,We work together to help you get whatever you want from anyplace in egypt either from another person or a company.
          Even you work in a company and want to recieve any shippment from another company you can easily use our site.</b></p><br>
      <button type="button" id="closebtn" onclick="closeForm2()">Close</button>
    </form>
  </div>
  
        
    </body>
</html>