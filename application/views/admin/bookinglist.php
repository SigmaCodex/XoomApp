      <link rel="stylesheet" type="text/css" href="assets/jqueryui/jquery-ui.min.css"> 
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "assets/JqueryUI/jquery-ui.min.js"></script>

    <!-- Select Input Design -->
    <style type="text/css">
         #slct {
          -webkit-appearance: none;
          -moz-appearance: none;
          -ms-appearance: none;
          appearance: none;
          outline: 0;
          box-shadow: none;
          border: 0 !important;
          background: #2c3e50;
          background-image: none;
        }
        /* Remove IE arrow */
        #slct::-ms-expand {
          display: none;
        }
        /* Custom Select */
        .select {
          position: relative;
          display: flex;
          width: 10em;
          height: 3em;
          line-height: 3;
          background: #2c3e50;
          overflow: hidden;
          border-radius: .25em;
        }
        #slct {
          flex: 1;
          padding: 0 .5em;
          color: #fff;
          cursor: pointer;
        }
        /* Arrow */
        .select::after {
          content: '\25BC';
          position: absolute;
          top: 0;
          right: 0;
          padding: 0 1em;
          background: #34495e;
          cursor: pointer;
          pointer-events: none;
          -webkit-transition: .25s all ease;
          -o-transition: .25s all ease;
          transition: .25s all ease;
        }
        /* Transition */
        .select:hover::after {
          color: #f39c12;
        }
     </style> 

    <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker" ).datepicker({
                minDate: 0,
                changeMonth:true,
               beforeShowDay : function (date) {
                  var dayOfWeek = date.getDay ();
                  // 0 : Sunday, 1 : Monday, ...
                  if (dayOfWeek == 2 ) return [false];
                  else return [true];
               }
            });
         });
      </script>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-5 col-sm-6">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" id="Search"  class="form-control" placeholder="Type here...">
            </div>
        </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-5 col-sm-6">
          <div class="select">
          <select name="slct" id="slct">
            <option selected disabled>Filter Table</option>
            <option value="all">All</option>
            <option value="today">Today</option>
            <option value="complete">Complete</option>
            <option value="waiting">Waiting</option>
          </select>
          </div>    
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Customer Booking Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="tableList">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Date&Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Car Type/Model</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Services</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>


                  <tbody id="TableID">
                      <?php  
                      foreach ($details as $s) {
                      ?>
                      <tr data-toggle="modal" class="select_customer" href="#ModalCustomerDetails" cust_id = "<?php echo $s->customer_id;?>"> 
                      <td>

                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $s->Name;?></h6>
                            <p class="text-xs text-secondary mb-0">Booking ID:<?php echo $s->customer_id;?></p>
                            <p class="text-xs text-secondary mb-0"><?php echo $s->email;?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-<?php if($s->status == "waiting"){echo "success";}else if($s->status == "cancelled"){echo "danger";}else{echo "secondary";} ?>"><?php echo $s->status;?></span>
                      </td>                      
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $s->date;?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $s->time;?></p>
                      </td>
                      <td class="align-middle text-center">
                         <p class="text-xs font-weight-bold mb-0"><?php echo $s->car_type;?></p>      
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $s->services;?></span>
                      </td>

                    </tr>  

                    <?php   }  ?> 
                  </tbody>


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  <!-- Button to Open the Modal -->


  <!-- The Customer  Modal -->
  <div class="modal fade" id="ModalCustomerDetails">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Customer Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                      <h6 class="mb-0">Customer Booking ID: </h6> <h6 class="mb-0" id="cust_ID"> </h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="name" disabled="">
                            <span class="input-group-text " id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">email</label>
                          <div class="input-group">
                            <input type="email" class="form-control" id="email" disabled="">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Contact Number</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="contact" disabled="">
                            <span class="input-group-text " id="basic-addon3" ><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>

<!--                     <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">address</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="address" disabled="">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div> -->
                    
                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">car type/model</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="cartype" disabled="">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>



<!--                     <div class="col-md-3 mb-6">
                      <div class="form-group  edit_info" >
                          <label class="form-control-label" for="basic-url">Package</label>
                          <div class="input-group">
                          <div class="form-control form-control">
                            <select style="border-radius: 10px;"  id="package" disabled>
                              <option value="Basic">
                                  <?php echo "Basic";?>
                              </option>
                              <option value="Premium">
                                  <?php echo "Premium";?>
                              </option>
                              <option value="Ultimate">
                                  <?php echo "Ultimate";?>
                              </option>
                            </select>
                          </div>
                           </div>
                      </div>
                    </div> -->
                      <div class="col-md-3 mb-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Package</label>
                          <div class="input-group">
                           <!--  <input type="text" class="form-control" id="partners_name" > -->
                            <select class="form-control form-control" id="package" style="background-color: #ffffff;" disabled>
                              <option value="Basic">
                                  <?php echo "Basic";?>
                              </option>
                              <option value="Premium">
                                  <?php echo "Premium";?>
                              </option>
                              <option value="Ultimate">
                                  <?php echo "Ultimate";?>
                              </option>
                              <option value="<?php echo "EID";?>">
                                  <?php echo " Express Interior Detailing";?>
                              </option>                              
                            </select> 

                          </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Status</label>
                          <div class="input-group">
                            <select class="form-control form-control" id="status" style="background-color: #ffffff;" style="border-radius: 10px;" disabled>
                              <option value="waiting">
                                  Waiting
                              </option>
                              <option value="cancelled">
                                 cancelled
                              </option>
                              <option value="complete">
                                Complete
                              </option>
                            </select>
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-3 mb-4">
                      <div class="form-group  edit_info">
                          <label class="form-control-label" for="basic-url">Date</label>
                          <div class="input-group">
                          <input class="form-control form-control" style="border-radius: 10px;" type="date" id = "datepicker" disabled>
                          </div>
                      </div>
                    </div> 
                    
                    <div class="col-md-3  mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Time</label>
                          <div class="input-group">
                            <select class="form-control form-control" style="background-color: #ffffff;"  style="border-radius: 10px;"  id="time" name="time" disabled>
                            <option value="">Choose Time</option>
                                  <option id="9am" value="9am">9am - 11am</option>
                                  <option id="12pm"value="12pm">12pm - 2pm</option>
                                  <option id="3pm" value="3pm">3pm - 5pm</option> 
                            </select>
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div> 

<!--                     <div class="col-md-6 mb-md-0 mb-6">
                      <div class="form-group edit_info ">
                          <label class="form-control-label" for="basic-url">Note to washer</label>
                          <div class="input-group">
                              <textarea style="border-radius: 10px;" id="message" name="message" placeholder="Tell us anything that might be important." class="form-control" disabled=""></textarea>
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"></i></span>
                          </div>
                      </div>
                    </div>  -->

        <div class="col-md-6 mb-md-0 mb-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-md-4 text-right">
                  <a href="javascript:;">
                    <i class="fas fa-user-edit text-secondary text-sm" id="click-address" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Address"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm" id="address_note">

              </p> 

               <div class="form-group edit_info ">
                    <div class="input-group">
                      <textarea style="border-radius: 10px; display: none;" rows="2" id="address" name="address" placeholder="" class="form-control" disabled=""></textarea>
           
                    </div>
                </div>
            </div>
          </div>
        </div>








        <div class="col-md-6 mb-md-0 mb-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Note to washer</h6>
                </div>
                <div class="col-md-4 text-right">
                  <a href="javascript:;">
                    <i class="fas fa-user-edit text-secondary text-sm" id="click-notewasher" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Note"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm" id="note_washer">

              </p> 

               <div class="form-group edit_info ">
                    <div class="input-group">
                      <textarea style="border-radius: 10px; display: none;" rows="10" id="message" name="message" placeholder="Tell us anything that might be important." class="form-control" disabled=""></textarea>
           
                    </div>
                </div>
            </div>
          </div>
        </div>


                    <div class="row">
                      <div class="col-md-6 mb-md-0 mb-6">
                      <!--<a href="listofbooking" class="btn btn-icon btn-3 btn-default" type="button" id="btn_update">-->
                         <!--<button >Update</button>-->
                      <!--  <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>-->
                      <!--  <span class="btn-inner--text">Update</span>-->
                      <button  class="btn btn-primary btn-lg btn-block" id="btn_update" style="background-color:black;border-color:black;font-size:18px;border-radius: 10px;">Update</button>
                      <button  class="btn btn-danger btn-lg btn-block" id="btn_delete" style="background-color:#ea0606;border-color:red;font-size:18px;border-radius: 10px;">Delete</button>
                      
                      <!--<a href="listofbooking" class="btn btn-icon btn-3 btn-danger" type="button" id="btn_delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel Customer Booking">-->
                      <!--  <span class="btn-inner--icon"><i class="fa fas-eraser"></i></span>-->
                      <!--  <span class="btn-inner--text">Remove</span>-->
                      </a>
                    </div>
                    </div>
                                   

                  </div>

                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


  </main>





  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Xoomm Option</h5>
          <p>To be Develop</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>


      <hr class="horizontal dark my-1">

      <div class="card-body pt-sm-3 pt-0">

        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <!-- Sidenav appear-->
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>

      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
<!--     <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="assets/js/jquery-1.10.2.min.js"></script>
    <script src = "assets/JqueryUI/jquery-ui.min.js"></script> -->
<!--    <script src="assets/js/jquery.min.js"></script> -->
  <!--<script src="assets/design/js/core/popper.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 





  <script type="text/javascript">
    $(document).ready(function(){

          // Search all columns
    $('#Search').keyup(function(){
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $('table tbody tr').hide();

      // Count total search result
      var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

      if(len > 0){
        // Searching text in columns and show match row
        $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
          $(this).closest('tr').show();
        });
      }

    });

    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});

    });
  </script>






<!-------------- dropdown filter logic -------------->
<script type="text/javascript">
  $(document).on('change','#slct',function(){
      var selected = $(this).val();
      //get the Current Date
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; 
      var yyyy = today.getFullYear();
      if(dd<10) 
      {dd='0'+dd;}if(mm<10){mm='0'+mm;} 
      today = mm+'/'+dd+'/'+yyyy;



        //clear the table
        $("#TableID").empty();

        $.post('filterbookinglist',{slected:selected,date:today},function(data)
        {
             
              var result = JSON.parse(data);

               for(var x = 0 ; x < result.length ; x ++)
                {
                    //populate  data from customer
                    var btn_color;
                    if (result[x]['status'] == "waiting"){
                      btn_color = "success";
                    }else if(result[x]['status'] == "cancelled"){
                      btn_color = "danger";
                    }else{
                      btn_color = "secondary";
                    }

                    $("#TableID").append('<tr data-toggle="modal" class="select_customer" href="#ModalCustomerDetails" cust_id = "'+result[x]['customer_id']+'"><td><div class="d-flex px-2 py-1"><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">'+result[x]['Name']+'</h6><p class="text-xs text-secondary mb-0">Booking ID:'+result[x]['customer_id']+'</p><p class="text-xs text-secondary mb-0">'+result[x]['email']+'</p></div></div></td><td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-'+btn_color+'">'+result[x]['status']+'</span></td><td><p class="text-xs font-weight-bold mb-0">'+result[x]['date']+'</p><p class="text-xs text-secondary mb-0">'+result[x]['time']+'</p></td><td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">'+result[x]['car_type']+'</p></td><td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold">'+result[x]['services']+'</span></td></tr>');
                                    
                }
           
        });

  });
</script>

<!------------- Customer Details logic --------------->
  <script type="text/javascript">
    $(document).on('click','#click-notewasher',function(){
          $("#message").show(); 
    });
    $(document).on('click','#click-address',function(){
          $("#address").show(); 
    });


  </script>

  <script type="text/javascript">
      $(document).on('click','.select_customer',function(){
       var customer_id = $(this).attr("cust_id");

           $("#message").hide(); 
           $("#address").hide(); 
    
      $.post('selectcustomer',{c_Id:customer_id},function(data)
        {
               var result = JSON.parse(data);
        
              
                for(var x = 0 ; x < result.length ; x ++)
                {
                    //populate  data from customer
                    $('#cust_ID').text(result[x]['customer_id']);
                    $('#name').val(result[x]['Name']);
                    $('#email').val(result[x]['email']);
                    $('#contact').val(result[x]['contactNum']);
                    $('#address').val(result[x]['address']);
                    $('#cartype').val(result[x]['car_type']);
                    $('#package').val(result[x]['services']).change();
                    $('#status').val(result[x]['status']).change();
                    $("#datepicker").val(result[x]['date']);
                    $('#time').val(result[x]['time']).change();
                    $('#message').val(result[x]['comment']).change();
                    $('#note_washer').text(result[x]['comment']);
                    $('#address_note').text(result[x]['address'])                
                }
        });      
  });
  </script>
<!--   remove the disable attr input,selects -->
  <script type="text/javascript">
    $(document).on('click','.edit_info',function(){
        var tag_id_input = $(this).find("input").attr("id");
        var tag_id_select = $(this).find("select").attr("id");
        var tag_id_textarea = $(this).find("textarea").attr("id");
        $("#"+tag_id_input).removeAttr("disabled");
        $("#"+tag_id_select).removeAttr("disabled");
        $("#"+tag_id_textarea).removeAttr("disabled");
   });

  </script>
  <!-- remove or cancel booking -->
  <script type="text/javascript">
    $(document).on('click','#btn_delete',function(){ 
        var customer_id = $("#cust_ID").text();

        var r = confirm("Are sure you want to delete this record?");
         if (r == true) {
            $.post('deletecustomer',{c_Id:customer_id},function(data)
            {
                  alert("Record Deleted");
                  window.location.replace("listofbooking");
            });
        } else {
            console.log("no");
        }


        
    });
  </script>


 <!-- update booking details-->
    <script type="text/javascript">
    $(document).on('click','#btn_update',function(){ 
        var customer_id = $("#cust_ID").text();
        var nameVal  =  $("#name").val();
        var emailVal  =  $("#email").val();
        var phoneVal  =  $("#contact").val();
        var AddressVal  =  $("#address").val();
        var package_type  =  $("#package").val();
        var datepicker  =  $("#datepicker").val();
        var timeVal  =  $("#time").val();
        var messageval  =  $("#message").val();
        var statusVal      =  $("#status").val();
        var cartypeVal      =  $("#cartype").val();

        
         $.ajax({
              url:"updatecustomer",
              method:"POST", 
              data:{c_Id:customer_id,name:nameVal,email:emailVal,phone:phoneVal,Address:AddressVal,services:package_type,date:datepicker,time:timeVal,message:messageval,status:statusVal,car_type:cartypeVal},
                success:function(data)
                {
                  alert("Updated");
              
                 window.location.replace("listofbooking");
                }
              });

    });
  </script>

  



  <script src="assets/design/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>