<?php
include_once 'loginserve.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet"
   type = "text/css"
   href = "Css/Login.css" />
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
            <a href="Welcome_page.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
            <button class="btn" onclick="openForm1()"><i class="fa fa-bars"></i> Services</button>
            <button class="btn" onclick="openForm()"><i class="fa fa-phone"></i> Contact</button>
            <button class="btn" onclick="openForm2()"><i class="fa fa-info-circle"></i> About Us!!</button>
            <br>
            <label id="wo" ><i class="fa fa-truck"></i> <strong> "<span id="sp">EGYPT'S</span> LARGEST SHIPPING COMPANY" </strong><i class="fa fa-truck"></i></label>  
            <br>
        </div>
        <br><br><br>
        <hr>


<div id="Fullpage">
<h1 text-align="center">Login</h1>
<form action="" method="POST" style="text-align:center;" id="f">
<input type="text" placeholder="Username" id="user" name="user">
<br></br>
<input type="password" placeholder="password" id="pass" name="pass">
<br></br>
<input type="submit" value="Login" name="submit" id="login">
<br>
<span><?php echo $error?></span>
<div class="form-popup" id="myForm">
  <form class="form-container1">
    <h1 id="Btnsh">Contact us :</h1>
    <p style="color: rgb(223, 27, 27);"><b>Email : Transmicrocompany@gmail.com</b></p><br>
    <p style="color: rgb(223, 27, 27);"><b>Call us: +201140846608</b></p><br>
    <button type="button" id="closebtn" onclick="closeForm()">Close</button>
  </form>
</div>
<div class="form-popup" id="myForm1">
    <form class="form-container1">
      <h1 id="Btnsh">Services:</h1>
      <li><p style="color: rgb(223, 27, 27);"><b>Business To Business Shipping "BTB" </b></p><br></li>
      <li><p style="color: rgb(223, 27, 27);"><b>Business To Client "BTC"</b></p><br></li>
      <li><p style="color: rgb(223, 27, 27);"><b>Client To Client "CTC"</b></p><br></li>
      <button type="button" id="closebtn" onclick="closeForm1()">Close</button>
    </form>
  </div>
  <div class="form-popup" id="myForm2">
    <form class="form-container1">
      <h1 id="Btnsh">About Us!</h1>
      <p style="color: rgb(223, 27, 27);width: 300px;"><b>Transmicron is a shipping creative company ,We work together to help you get whatever you want from anyplace in egypt either from another person or a company.
          Even you work in a company and want to recieve any shippment from another company you can easily use our site.</b></p><br>
      <button type="button" id="closebtn" onclick="closeForm2()">Close</button>
    </form>
  </div>
</body>
</html>