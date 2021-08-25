<?php 
include_once 'dbh.inc.php';

$name=$_POST['n'];
$email=$_POST['mail'];
$phone=$_POST['phone'];
$shippment=$_POST['shippment'];
$town=$_POST['town'];
$street=$_POST['street'];
$building=$_POST['building'];
$apartment=$_POST['apartment'];



if(empty($name) || empty($email) || empty($phone) || empty($shippment) || empty($town) || empty($street) || empty($building) || empty($apartment))
{
    echo "<script type='text/javascript'>alert('Please complete the information');</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/",$name)){

    echo "<script type='text/javascript'>alert('Invalid name,please try again');</script>";
exit; 
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "<script type='text/javascript'>alert('Invalid email,please try again');</script>";
exit; 
}
else if(!preg_match("/^\d{11}$/", $phone)){
     echo "<script type='text/javascript'>alert('Invalid phone number,please try again');</script>";
exit; 
}

else if(!preg_match("/^[A-Za-z]+$/", $shippment)){
     echo "<script type='text/javascript'>alert('Invalid shippment,please try again');</script>";
exit; 
}
else if(!preg_match("/^[A-Za-z]+$/", $town)){
     echo "<script type='text/javascript'>alert('Invalid town,please try again');</script>";
exit; 
}

else if(!preg_match("/^[A-Za-z]+$/", $street)){
      echo "<script type='text/javascript'>alert('Invalid street,please try again');</script>";
exit; 
}


$sql = "INSERT INTO btb_btc (Name,Phone,Email,Type,Town,Street,Bulding,Apartment)
 VALUES ('$name','$phone','$email','$shippment','$town','$street','$building','$apartment');";

 mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Information Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="Css/Info.css">
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
        <form id="mainform">
        <h1 id="infohead"><strong> Shippment Information</strong></h1>
        
            <table cellpadding="20">
                <tr>
                    <td><label id="Label"><strong>-Shippment Number :</strong></label></td>
                    <td><label id="Shipping_No"></label></td>
                </tr>
                <tr>
                    <td><label id="Label"> <strong>-Placed On :</strong></label></td>
                    <td><span id="Placed_On"></span></td>
                </tr>
                <tr>
                    <td><label id="Label"><strong>-Items in your order :</strong></label></td>
                    <td><span id="Items" ></span></td>
                </tr>
                <tr>
                    <td><label id="Label"><strong>-Deliver Date:</strong></label></td>
                    <td><span id="del"></span></td>
                </tr>

                <tr>
                    <td><label id="Label"><strong>-Delivrey Option :</strong></label></td>
                    <td><label id="Option"></label></td>
                </tr>
                
                <tr>
                    <td><label id="Label"><strong>-Shipping Adress :</strong></label></td>
                    <td colspan="4" >
                        <label id="adds">*Town :</label> <span id = "Town"></span><br>
                        <label id="adds">*Street :</label>  <span id = "Street"></span><br>
                        <label id="adds">*Building No. :</label> <span id = "Building_No"></span><br>
                        <label id="adds">*Apartment No. :</label> <span id="Apartment_No"></span><br>
                    </td>
                </tr>
            <br>
        </table>
        <br>
        <p id="thanksmsg">Thanks for visiting our website :)</p>
        </form>
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
        <script>
            var someDate = new Date();
            someDate.setDate(someDate.getDate() ); //number  of days to add, e.x. 15 days
            var dateFormated = someDate.toISOString().substr(0,10); 
            document.getElementById("Placed_On").textContent=dateFormated;
            document.getElementById("Shipping_No").innerHTML=localStorage.getItem("randvalue")
            document.getElementById("Town").innerHTML=localStorage.getItem("textvalue");
            document.getElementById("Street").innerHTML=localStorage.getItem("value");
            document.getElementById("Building_No").innerHTML=localStorage.getItem("Buildingvalue");
            document.getElementById("Apartment_No").innerHTML=localStorage.getItem("Apartmentvalue");
            document.getElementById("Items").innerHTML=localStorage.getItem("shippingvalue");
            document.getElementById("Option").innerHTML=localStorage.getItem("delivreyvalue");
            document.getElementById("del").innerHTML=localStorage.getItem("delvalue");
           
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
    </body>
</html>