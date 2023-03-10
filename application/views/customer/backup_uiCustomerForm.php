<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="assets/css/timedropper.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

	<title>Booking Form</title>

</head>

<style type="text/css">

body {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

img.logo {
  width: 100%;
  height: auto;
  margin-bottom: -5%;
  /* Recommended - Limit maximum width */
  max-width: 150px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}
a
label {
  display: block;
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

label{
  font-family: 'roboto';
}
input{
  font-family: 'roboto';
}
select{
  font-family: 'roboto';
}
textarea {
  font-family: 'roboto';
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: black
  border: none;
  color: white;
  font-size: 1.25em;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

@media screen and (max-width: 767px) {
 body #logo {
   max-width: 90%;
   display: block;
 }
}

</style>

<body>
	<div style="width: 100%; height: 7%; background: white;overflow:hidden;">
    <!-- NAV: Logo  ---->
    <h4 style="text-align:center;padding-top: 5%;background: white;">
    	<img class="logo" src="images/logo.png" alt="XoooomAutospaLogo"> <br/> 
   		 Xoooom Autospa</h2>
        <p style="text-align: center;color: #868686;background: white;">Welcome to Xoooom Autospa Ozamiz Branch</p>
	
	</div>
	<div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;">
	</div>
	<div class="container">
	<div class="row">
    <div class="col-md-12">

	<form action="submitbooking" method="POST">
	  <div class="form-group">
	  	<label style="color: #868686;font-size: 12px;">Customer Details</label><br/>
	    <label for="name">Name</label>
	    <input style="border-radius: 10px;" class="form-control" type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
	  </div>
	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input style="border-radius: 10px;" class="form-control" type="email" id="email" name="email" placeholder="john.doe@email.com" required>
	  </div>
	  <div class="form-group">
	    <label for="phone">Contact No.</label>
	    <input style="border-radius: 10px;" class="form-control" type="tel" id="phone" name="phone" placeholder="63+" pattern=(\d{11})) required>
	  </div>
	  <div class="form-group">
	    <label for="Address">Address</label>
	    <input style="border-radius: 10px;" class="form-control" type="text" id="Address" name="Address" placeholder="unit no., house no., street name, city, postal code" required>
	  </div>
	  <hr class="mb-4">
	  <label style="color: #868686;font-size: 12px;">Service Package</label><br/>
	  
	  <div class="form-group">
	    <label for="package">Type</label>
	     <select style="border-radius: 10px;" name="package_type" id="package_type" onchange="display_package_benefits()" class="form-control">
                <option value="<?php echo "Basic";?>">
                    <?php echo "Basic";?>
                </option>
                <option value="<?php echo "Premium";?>">
                    <?php echo "Premium";?>
                </option>
                <option value="<?php echo "Ultimate";?>">
                    <?php echo "Ultimate";?>
                </option>
            </select>
	  </div>

	  <div class="form-group">
        <label style="color: #868686;font-size: 12px;">Package Inclusions</label><br/>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%">
            <p name="package_type_benefits" id="package_type_benefits">
                <ul style="font-size: 14px;" id="ul_text">
                    <li>Exterior Car Wash</li>
                    <li>Glass Cleaning</li>
                    <li>Tire Shine</li>
                    <li>Premium Wax</li>
                </ul>
            </p>
            </div>
        </div>

	  <div class="elem-group inlined"> 
	    <label for="checkin-date">Date</label>
	    <input style="border-radius: 10px;" type="date"   class="form-control" name="date" value="mm/dd/yyyy" required>
	  </div>

	  <div class="elem-group inlined">
	    <label for="Time">Time</label>
	    <select style="border-radius: 10px;" class="form-control" id="time" name="Time" required>
	        <option value="">Choose Time</option>
	        <option value="9am">9:00 am</option>
	        <option value="10am">10:00 am</option>
	        <option value="11am">11:00 am</option>
	        <option value="12am">12:00 pm</option>
	        <option value="1pm">1:00 pm</option>
	        <option value="2pm">2:00 pm</option>
	        <option value="3pm">3:00 pm</option>
	        <option value="4pm">4:00 pm</option>
	        <option value="OOH">Outside Operating Hours</option>
	    </select>
	  </div>

	  <div class="form-group">
	  </div>

	  <div class="form-group">
	  	<label style="color: #868686;font-size: 12px;" for="Note">Note to washer</label>
	    <textarea style="border-radius: 10px;" id="message" name="message" placeholder="Tell us anything that might be important." class="form-control" required></textarea>
	  </div>

	  <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;">
	</div>
	
	  <button  class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:18px;border-radius: 10px;" type="submit">Book Now</button>

	</form>

  	<footer class="my-5 pt-5 text-muted text-center text-small">
	    <p class="mb-1">&copy; 2020-2021 Xoooom Autospa</p>
	    <ul class="list-inline">
	      <li class="list-inline-item"><a href="#">Privacy</a></li>
	      <li class="list-inline-item"><a href="#">Terms</a></li>
	      <li class="list-inline-item"><a href="#">Support</a></li>
	    </ul>
 	</footer>


</body>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>

<script>
        function display_package_benefits() {
            var package_select_value = document.getElementById("package_type").value;

            if(String(package_select_value) == "Basic"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li></ul>";
            
            }else if(String(package_select_value) == "Premium"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li><li>Car Fogging Sanitation - FREE</li></ul>";
            
            }else if(String(package_select_value) == "Ultimate"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li><li>Water-less Engine Cleaning</li><li>Car Fogging Sanitation - FREE</li></ul>";
            }
        }
</script>

<script type="text/javascript">
		var currentDateTime = new Date();
	var year = currentDateTime.getFullYear();
	var month = (currentDateTime.getMonth() + 1);
	var date = (currentDateTime.getDate() + 1);

	if(date < 10) {
	  date = '0' + date;
	}
	if(month < 10) {
	  month = '0' + month;
	}

	var dateTomorrow = year + "-" + month + "-" + date;
	var checkinElem = document.querySelector("#checkin-date");
	var checkoutElem = document.querySelector("#checkout-date");

	checkinElem.setAttribute("min", dateTomorrow);

	checkinElem.onchange = function () {
	    checkoutElem.setAttribute("min", this.value);
	}
	</script>
<script src="assets/js/timedropper.js"></script>
<script type="text/javascript">
	$( "#hour" ).timeDropper();
</script>

</html>