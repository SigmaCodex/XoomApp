<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="assets/css/timedropper.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>


    <link rel="stylesheet" type="text/css" href="assets/JqueryUI/jquery-ui.min.css"> 

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
<!-- main content -->
<body>
  <div style="width: 100%; height: 7%; background: white;overflow:hidden;">
    <!-- NAV: Logo  ---->
    <h4 style="text-align:center;padding-top: 5%;background: white;">
      <img class="logo" src="assets/img/logo.png" alt="XoooomAutospaLogo"> <br/> 
       Xoooom Autospa</h2>
        <p style="text-align: center;color: #868686;background: white;">Welcome to Xoooom Autospa Ozamiz Branch</p>
  
  </div>
  <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;">
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-12">


    <div class="form-group">
      <label style="color: #868686;font-size: 12px;">Customer Details</label><br/>
      
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="name">Name</label>
      <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
      </div>
    </div>


    <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="email">E-mail</label>
      <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="email" id="email" name="email" placeholder="john.doe@email.com" required>
      </div>
    </div>


    <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="phone">Contact No.</label>
      <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="number" id="phone" name="phone" placeholder="63+" pattern=(\d{11})) required>
      </div>
    </div>



    <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="Address">Address</label>
      <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="Address" name="Address" placeholder="unit no., house no., street name, city, postal code" required>
    </div>
    
    <a style="color: #868686;font-size: 12px; width:100%; text-align: center;"> Additional charges apply for areas outside our coverage area.</a>
    <a  style="color: #007bff;;font-size: 12px; border-color: transparent; background: transparent;width:100%;" 
        href="#" 
        type="button"  
        data-toggle="modal" 
        data-target="#arealistmodal"> Click here for the list of barangays within our coverage area.</a>
     <!--Bootstrap modal -->
    <div class="modal fade" id="arealistmodal" tabindex="-1"  role="dialog" aria-labelledby="arealistModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
              <h6 class="modal-title" id="arealistModalLabel">Xoooom Autospa Coverage Area List</h6>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
  
                    <img src="assets/img/arealist.png" style="width:auto">
                    
                </div>
            </div>
        </div>
    </div>



   <div class="form-group">
    <label style="color: #868686;font-size: 12px;">Service Package</label><br/>   
    <table style="border-spacing: 1;border-color: #868686;background:white;
  border-radius:6px;width:100%;margin:0 auto;font-size:12px;text-align:center;">
      <thead>
        <tr>
          <th></th>
          <th>BASIC</th>
          <th>PREMIUM</th>
          <th>ULTIMATE</th>
        </tr>
      <thead>
      <tbody>
        <tr>
          <td>Small</td>
          <td>₱280</td>
          <td>₱460</td>
          <td>₱640</td>
        </tr>
           <tr>
          <td>Medium</td>
          <td>₱300</td>
          <td>₱500</td>
          <td>₱700</td>
        </tr>
           <tr>
          <td>Large</td>
          <td>₱350</td>
          <td>₱600</td>
          <td>₱850</td>
        </tr>
           <tr>
          <td>X-Large</td>
          <td>₱400</td>
          <td>₱700</td>
          <td>₱1,000</td>
        </tr>
      </tbody>
    <table/>
    </div>


    <a style="color: #007bff;font-size: 12px; border-color: transparent; background: transparent;width:100%;" 
      href="#" 
      type="button"  
        data-toggle="modal" 
        data-target="#carlistmodal">Click here for a list of common vehicles and their size classification.
        </a><br/><br/>
      
    <!--Bootstrap modal -->
    <div class="modal fade" id="carlistmodal" tabindex="-1"  role="dialog" aria-labelledby="carlistModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
              <h6 class="modal-title" id="carlistModalLabel">Xoooom Autospa vehicle classification</h6>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <img src="assets/img/carlist1.jpeg" style="width:auto"> <!--here boss -->
                    <img src="assets/img/carlist2.jpeg" style="width:auto"> <!--here boss -->
                    <img src="assets/img/carlist3.jpeg" style="width:auto"> <!--here boss -->
                    <img src="assets/img/carlist4.jpeg" style="width:auto"> <!--here boss -->
                </div>
            </div>
        </div>

    </div>
  
  <!--here boss -->
    <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="cartype">Car Type/ Model</label>
      <label style="color: #868686;font-size: 10px;" for="cartype">(1 Slot for 1 Car)</label>
      <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="cartype" name="cartype" placeholder="e.g. Wigo" required>
    </div>
  </div>





    <hr class="mb-4">
    <label style="color: #868686;font-size: 12px;">Service Package</label><br/>
    
    <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
      <label style="color: #868686;font-size: 12px;" for="package">Type</label>
       <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" name="services" id="package_type" onchange="display_package_benefits()"  class="form-control">
                <option value="none">
                      Select a Service Package
                </option>
                <option value="<?php echo "Basic";?>">
                    <?php echo "Basic";?>
                </option>
                <option value="<?php echo "Premium";?>">
                    <?php echo "Premium";?>
                </option>
                <option value="<?php echo "Ultimate";?>">
                    <?php echo "Ultimate";?>
                </option>
                <option value="<?php echo "EID";?>">
                    <?php echo " Express Interior Detailing";?>
                </option>
            </select>
      </div>
    </div>

    <div class="form-group">
        <label style="color: #868686;font-size: 12px;">Package Inclusions</label><br/>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%">
            <p name="package_type_benefits" id="package_type_benefits">
                <ul style="font-size: 14px;" id="ul_text">
                    <li>Select A Package</li>
                </ul>
            </p>
            </div>
        </div>


      <label style="color: #868686;font-size: 12px;">Set Schedule</label><br/>   
    <div class="elem-group inlined"> 
      <label for="checkin-date">Date</label>
      <input style="border-radius: 10px;" type="text" id="datepicker"  class="form-control" name="date" value="mm/dd/yyyy" required>
    </div>

    <div class="elem-group inlined">
      <label for="Time">Time</label>
      <select style="border-radius: 10px;" class="form-control" id="time" name="time" disabled>
      <option value="" id="time_label" selected disabled>Choose Time</option>
            <option id="9am" value="9am">9am - 11am</option>
            <option id="12pm"value="12pm">12pm - 2pm</option>
            <option id="3pm" value="3pm">3pm - 5pm</option> 
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
  
    <button  class="btn btn-primary btn-lg btn-block" id="submitbtn" style="background-color:black;border-color:black;font-size:18px;border-radius: 10px;">Book Now</button>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020-2021 Xoooom Autospa</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
  </footer>

</body>
<!--<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script> -->

      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script type="assets/js/jquery-1.10.2.min.js"></script>
      <script src = "assets/JqueryUI/jquery-ui.min.js"></script>

  <!--. Script for Modal -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous">
    </script>
  <!--. til here --> 
  


  <!--   logic fo calendar Limit  -->
      <script>
         $(function() {
            $( "#datepicker" ).datepicker({
                minDate: 0,
                changeMonth:true

               //  ,
               // beforeShowDay : function (date) {
               //    var dayOfWeek = date.getDay ();
               //    // 0 : Sunday, 1 : Monday, ...
               //    if (dayOfWeek == 2 ) return [false];
               //    else return [true];
               // }
            });
         });
      </script>

<script>
        function display_package_benefits() {
            var package_select_value = document.getElementById("package_type").value;

            if(String(package_select_value) == "Basic"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Water-Based Premium Wax</li><li>Tire Shine</li></ul>";
            
            }else if(String(package_select_value) == "Premium"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Water-Based Premium Wax</li><li>Tire Shine</li><li>Interior Cleaning</li><li>Dashboard cleaning</li><li>Side Panels Cleaning</li><li>Vacuum</li><li>Matting Cleaning</li><li>Car Odor Neutralizer</li><li>Car Fogging Sanitation - FREE</li></ul>";
            
            }else if(String(package_select_value) == "Ultimate"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Water-Based Premium Wax</li><li>Tire Shine</li><li>Interior Cleaning</li><li>Dashboard cleaning</li><li>Side Panels Cleaning</li><li>Vacuum</li><li>Matting Cleaning</li><li>Car Odor Neutralizer</li><li>Water-less Engine Cleaning</li><li>UV Light DISINFECTION</li><li>Car Fogging Sanitation - FREE</li></ul>";
             //updated 1/18/22   
            }else if(String(package_select_value) == "EID"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Vacuuming of all interior surfaces</li><li> Dashboard deep cleaning using detailing brush</li><li>Vinyl and plastics deep cleaning</li><li>Steam cleaning of car seats and headliners</li><li> Shampooing of carpet and upholstery steam cleaning</li><li>Removing hard stains</li><li>Leather conditioning</li><li> Applying protectant to all vinyl and plastic</li><li>Antibac Car fogging Sanitation</li><li> UV car disinfection</li><li> Free Exterior Wash and Wax</li><li> Free Waterless Engine Cleaning</li></ul>";
            }

        }
</script>
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- validation and errortrapping -->
     <!-- package type -->
<script type="text/javascript">

  $(document).ready(function(){ 
      var package_type  =  $("#package_type").val();
      if (package_type == "none"){
        $("#submitbtn").attr('disabled', true);
      }
  });

   $(document).on('click','#package_type',function(){
    var package_type  =  $("#package_type").val();
    var dateval = $("#time").val();
      if (package_type =="none"){
        $("#submitbtn").attr('disabled', true);
      }else if(dateval == "0"){
        $("#submitbtn").attr('disabled', true)
      }
      else{
         $('#submitbtn').removeAttr("disabled");
      }
   });

</script>

<!--submit -->
<script type="text/javascript">
          $(document).on('click','#submitbtn',function(){
         
             var nameVal  =  $("#name").val();
             var emailVal  =  $("#email").val();
             var phoneVal  =  $("#phone").val();
             var AddressVal  =  $("#Address").val();
             var package_type  =  $("#package_type").val();
             var datepicker  =  $("#datepicker").val();
             var timeVal  =  $("#time").val();
             var messageval  =  $("#message").val();
             var cartypeVal  = $("#cartype").val();

             if(nameVal == "" || emailVal == "" ||  phoneVal == "" || AddressVal == "" || cartypeVal == "" || datepicker == "" || timeVal == null || messageval  == ""){
               swal("You might forgot to fill up some information", "please check your booking information", "warning");
             }else{
                             $.ajax({
                     url:"submitbooking",
                     method:"POST", 
                     data:{name:nameVal,email:emailVal,phone:phoneVal,Address:AddressVal,services:package_type,date:datepicker,time:timeVal,message:messageval,car_type:cartypeVal},
                     success:function(data)
                     {
                        $("#name").val("");
                        $("#email").val("");
                        $("#phone").val("");
                        $("#Address").val("");
                        $("#cartype").val("");
                        $("#package_type").val("");
                        $("#datepicker").val("mm/dd/yyyy");
                        $("#time").val("");
                        $("#message").val("");
                        
                        $("#time").attr('disabled', true);
                     }
              }); 
             }



              // $("#submitbtn").attr('disabled', true);
              //  swal("Good job!", "We are Proccesing your booking appointment", 'success').then(function() {
              //          window.location = "admindashboard";
              //      });


           }); 


       //MO check server padung db dayun if 3 naba ka slot na kani na adlaw
      $(document).on("change",'#datepicker',function(){
          var dateval = $(this).val();
          var time = $("#time").val();
          $('#time').removeAttr("disabled");//para maka select sya og time 
      
          // $.post('checkbookdate',{date:dateval},function(data)
          //   { 
          //     if (data >= 3) {
          //         // alert("Sorry This Day is Out of slot! please choose another date");
          //         swal("Sorry This Day is Out of slot!", "please choose another date", "warning");
          //         $("#submitbtn").attr('disabled', true);
          //     }
          //     else if(time == "0"){
          //       $("#submitbtn").attr('disabled', true)
          //     }
          //     else{
          //       $('#submitbtn').removeAttr("disabled");
          //     }
          //   });

      });

    //check if na bay available time sa selected na date
     // $(document).on("click",'#time',function(){
     //      var dateval = $("#datepicker").val();
     //      var time_label = $("#time").val();
     //      var package_type  =  $("#package_type").val();

     //      $('#9am').removeAttr("disabled");
     //      $('#12pm').removeAttr("disabled");
     //      $('#3pm').removeAttr("disabled");

     //      //check if customer input a correct time
     //      if (time_label == "0"){
     //           $("#submitbtn").attr('disabled', true)
     //      }else if (package_type =="none"){
     //            $("#submitbtn").attr('disabled', true);
     //      }else{
     //            $('#submitbtn').removeAttr("disabled");
     //           } 

     //      $.post('checktime',{date:dateval},function(data)
     //        { 

     //          var result = JSON.parse(data);
     //            for(var x = 0 ; x < result.length ; x ++)
     //            {
     //                if (result[x]['time'] == "9am"){    
     //                   $("#9am").attr('disabled', true);
     //                }else if(result[x]['time'] == "12pm"){
     //                   $("#12pm").attr('disabled', true);
     //                }else if(result[x]['time'] == "3pm"){
     //                   $("#3pm").attr('disabled', true);
     //                }
    
     //            }
     //        });

     //  });

</script>


</html>