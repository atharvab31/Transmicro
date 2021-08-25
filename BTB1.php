

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>BTB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/BTB.css">
    <script>
        var someDate = new Date();
        function ValidateEmail()
        {
                deliverdate();
                passvalue();
        }
        function passvalue()
        {	
			    var name = document.getElementById("t").value;
				localStorage.setItem("textvalue",name);
				
				var Street = document.getElementById("st").value;
				localStorage.setItem("value",Street);

				var Building = document.getElementById("b").value;
				localStorage.setItem("Buildingvalue",Building);

				var Apartment = document.getElementById("Ap").value;
				localStorage.setItem("Apartmentvalue",Apartment);

				var delivrey_option = document.getElementById("delivrey").value;
				localStorage.setItem("delivreyvalue",delivrey_option);

				var Items = document.getElementById("sh").value;
                localStorage.setItem("shippingvalue",Items);

                var Random_Number = document.getElementById("rand").innerHTML=Math.floor(Math.random()*2000);
                var x = document.getElementById.innerHTML=Random_Number;
                localStorage.setItem("randvalue",x);        
				return false;
        }
        function deliverdate()
        {
            var town = document.getElementById("t").value;
            if (town === "cairo"||town === "Cairo")
            {
                someDate.setDate(someDate.getDate() +2); //number  of days to add, e.x. 15 days
                dateFormated = someDate.toISOString().substr(0,10);
                var y = document.getElementById("time").textContent=dateFormated;
                localStorage.setItem("delvalue",y);
            }
            else if (town === "giza"||town === "Giza")
            {
                someDate.setDate(someDate.getDate() +5); //number  of days to add, e.x. 15 days
                dateFormated = someDate.toISOString().substr(0,10);
                var y = document.getElementById("time").textContent=dateFormated;
                localStorage.setItem("delvalue",y);
            }

            else if (town === "Alex"||town === "alex")
            {
                someDate.setDate(someDate.getDate() +10); //number  of days to add, e.x. 15 days
                dateFormated = someDate.toISOString().substr(0,10);
                var y = document.getElementById("time").textContent=dateFormated;
                localStorage.setItem("delvalue",y);
            }
            else
            {
                someDate.setDate(someDate.getDate() +15); //number  of days to add, e.x. 15 days
                dateFormated = someDate.toISOString().substr(0,10);
                var y = document.getElementById("time").textContent=dateFormated;
                localStorage.setItem("delvalue",y);
            }

        }
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
   
    <div >
        
        <form name="form1" method="POST" action="Info.php" id="mainform">
        <table cellpadding="40" >
            <h1 id="btb">BTB Registration</h1>
            <br><br>
            <tr>
                <td><input type="text" id="name" placeholder="Enter Your Name" name="n"></td>
                <td><input type="text" id="email" name="mail" placeholder="Enter Your Email"></td>
            </tr>
            <tr>
                <td><input type="text" id="number" placeholder="Enter Your Phone No." name="phone"> </td>
                <td><input type="text" id="sh" placeholder="Enter Your Shippment" name="shippment"> </td>
            </tr>
            <tr>
                <td> <input type="text" id="t" placeholder="Town" name="town" ></td>
                <td><input type="text" id="st" placeholder="Street" name="street"></td>
            </tr>
            <tr>
                <td><input type="number" id="b" placeholder="Building No." name="building" max="700" min="1"></td>
                <td><input type="number" id="Ap" placeholder="Apartment No." name="apartment" max="70" min="1"></td>
            </tr>


            <input type="hidden" id="time" name="T">
            <input type="hidden"  id="rand" name="track">
            <input type="hidden" id ="Deliver">
        </table>
        <label><i class="fa fa-dropbox"></i> Delivrey Option: </label>
                    <select name="delivrey option" id="delivrey" >
                        <option value="Standard door delivrey">Standard door delivrey</option>
                        <option value="In Garage Delivrey">In Garage Delivrey</option>
                        <option value="Locker Delivrey">Locker Delivrey</option>
                    </select>
                    <br>
                    <br>
        <button type="submit" value="submit "id="submit" name="sub" onclick="ValidateEmail()">
        Submit</button>
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
    <p id="msg"><Strong id="please">Please</strong> kindly fill this form :)</p>
</body>
</html>