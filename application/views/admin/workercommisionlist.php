      <link rel="stylesheet" type="text/css" href="assets/jqueryui/jquery-ui.min.css"> 
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "assets/JqueryUI/jquery-ui.min.js"></script>
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
        <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" id="Search"  class="form-control" placeholder="Type here...">
            </div>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Of Commision</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date&Time</th> 
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Staff</th>          
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
    
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Services</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>


                  <tbody id="TableID">
                      <?php  
                      foreach ($details as $s) {
                      ?>
                   <tr data-toggle="modal" class="select_comission" href="#ModalCommisionDetails" commision_id ="<?php echo $s->commission_id;?>">

                      <td class="align-middle text-center">
                        <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0"><?php echo $s->date;?></p>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $s->time;?></p>                            
                        </div>
                      </td>
                      
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $s->personnel;?></p>
                        <span class="text-secondary text-xs font-weight-bold"><?php if($s->partner == "none"){ echo " ";}else{echo $s->partner;}?></span>
                      </td>                     
                          
                      <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">Customer ID:<?php echo $s->cust_id;?></p>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $s->Name;?></p>    
                      </td>
                      


                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $s->type;?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $s->size;?></p>
                      </td>
                       <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0">₱ <?php echo $s->total;?></p>
                       
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


  <div class="modal fade" id="ModalCommisionDetails">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">WorkerCommision Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                      <h6 class="mb-0">WorkerCommision ID: </h6> <h6 class="mb-0" id="commision_ID" > </h6>
                    </div>
                  </div>
                </div>

                <div class="card-body p-3">
                  <div class="row">
                    
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Primary Staff</label>
                          <div class="input-group">
                          <!--   <input type="text" class="form-control" id="Worker_name" > -->
                            <select class="form-control form-control" id="Worker_name" style="background-color: #ffffff;">
                             <option value="JL Paredes">JL Paredes</option>
                             <option value="Yuan">Yuan (Trainee)</option>
                             <option value="Admin">Admin</option>
                             <option value="Others">Others</option>
                             <option value="Ruben Macas Jr">Ruben Macas Jr</option>
                             <option value="Rodel Macas">Rodel Macas</option>
                             <option value="Jeck Sila">Jeck Sila</option>
                             <option value="none">none</option>
                            </select> 

                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Secondary Staff</label>
                          <div class="input-group">
                           <!--  <input type="text" class="form-control" id="partners_name" > -->
                            <select class="form-control form-control" id="partners_name" style="background-color: #ffffff;">
                             <option value="JL Paredes">JL Paredes</option>
                             <option value="Yuan">Yuan (Trainee)</option>
                             <option value="Admin">Admin</option>
                             <option value="Others">Others</option>
                             <option value="Ruben Macas Jr">Ruben Macas Jr</option>
                             <option value="Rodel Macas">Rodel Macas</option>
                             <option value="Jeck Sila">Jeck Sila</option>
                             <option value="none" style="display: none ">none</option>
                            </select> 

                          </div>
                      </div>
                    </div>

                     <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Car Size</label>
                          <div class="input-group">
                            <!-- <input type="text" class="form-control" id="size" > -->
                            <select class="form-control form-control" id="size" style="background-color: #ffffff;">
                             <option value="Small">Small</option>
                             <option value="Medium">Medium</option>
                             <option value="Large">Large</option>
                             <option value="Extra Large">Extra Large</option>
                            </select>
                          
                          </div>
                      </div>
                    </div> 

                    <!-- updated 1/18/2022 -->
                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Package</label>
                          <div class="input-group">
                            <!-- <input type="text" class="form-control" id="type" > -->
                            <select class="form-control form-control" id="type" style="background-color: #ffffff;">
                             <option value="Premium">Premium</option>
                             <option value="Basic">Basic</option>
                             <option value="Ultimate">Ultimate</option>
                             <option value="<?php echo "EID";?>">
                               <?php echo " Express Interior Detailing";?>
                              </option>
                            </select>
                          </div>
                      </div>
                    </div>



                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Discount</label>
                          <div class="input-group">
                          <!--  <input type="text" class="form-control" id="discount" disabled=""> -->

                            <select class="form-control form-control" id="discount" style="background-color: #ffffff;">
                             <option value="none">0</option>
                             <option value="Ten">10%</option>
                             <option value="twenty">20%</option>
                             <option value="thirty">30%</option>
                             <option value="forty">40%</option>
                             <option value="fifty">50%</option>
                             <option value="sixty">60%</option>
                             <option value="seventy">70%</option>
                             <option value="eighty">80%</option>
                             <option value="ninety">90%</option>
                             <option value="hundred">100%</option>
                            </select>

                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Discount Reason</label>
                          <div class="input-group">
                            <textarea style="border-radius: 10px;" id="disc_note" name="message"  class="form-control"></textarea>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Additional Charge/s</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="add_charges">
                        
                          </div>
                      </div>
                    </div>                    


                    <div class="col-md-6 ">
                      <div class="form-group edit_info ">
                          <label class="form-control-label" for="basic-url">Addtionals Charge/s Reason</label>
                          <div class="input-group">
                              <textarea style="border-radius: 10px;" id="additional" name="message"  class="form-control"></textarea>
                          </div>
                      </div>
                    </div>


                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Manager's Discount</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="mng_discount">
                          </div>
                      </div>
                    </div>  

                    <div class="col-md-6">
                      
                    </div>



                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Plate Number</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="plate_number">
                        
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6 "></div>


                    <div class="col-md-6 mb-md-0 mb-6 ">
                      <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                          <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                              <h6 class="mb-0">Booking Info</h6>
                            </div>
                          </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                          <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm" id="customer_date"></h6>
                                <h6 class="text-dark mb-1 font-weight-bold text-sm" id="customer_time"></h6>
                                <h6 class="mb-1 text-dark font-weight-bold text-sm" id="customer_name"></h6>
                                <h6 class="text-dark mb-1 font-weight-bold text-sm" id="customer_contactnum"></h6>
                                <h6 class="text-dark mb-1 font-weight-bold text-sm" id="customer_address"></h6>
                                <h6 class="text-dark mb-1 font-weight-bold text-sm" id="customer_cartype"></h6>                                
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6 mb-md-0 mb-6 ">
                      <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                          <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                              <h6 class="mb-0">Worker Commision</h6>
                            </div>
                          </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                          <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm" id="worker1"></h6>
                              </div>
                              <div class="d-flex align-items-center text-sm" id="worker1_commision">
                         

                              </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm" id="worker2"></h6>
                              </div>
                              <div class="d-flex align-items-center text-sm" id="worker2_commision">
                              
                              </div>
                            </li>

                          </ul>
                        </div>
                      </div>
                    </div>





             <br>       
           <div class="col-md-12">
                <label style="color: black;font-size: 18px;font-weight: bold;">Billing Summary</label><br/>
            <div style=" width: 100%;position: relative;display: inline-block;margin:0;padding-top: 1%">
            <p name="package_type_benefits" id="package_type_benefits">
                   <table>
                      <tr >
                        <th style="color: #868686;">Service Billing</th>
                        <th style="text-align: right;color: #868686;">(PHP) Amount</th>
                      </tr>
                      
                      <tr>
                        <td id="package_label">Basic Package - Small</td>
                        <td ><input id="package_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="280" readonly></td>
                      </tr>

                      <tr>
                        <td id="discount_label">Discount</td>
                        <td style="text-align: right;"><input id="discount_amount" name="discount_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
                       
                      </tr>

                      <tr>
                        <td id="others">Managers Discount</td>
                        <td style="text-align: right;"><input id="show_mng_discount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background:white;" value="0" readonly></td>
                      </tr>


                      <tr>
                        <td id="others">Others</td>
                        <td style="text-align: right;"><input id="other_amount" name="other_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
                      </tr>

                      <tr>
                        <td id="package_label_16">VAT</td>
                        <td style="text-align: right;"><input name="package_vat_amount" id="package_vat_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
                      </tr>

                      <tr>
                        <td id="service_subtotal_label">Total:</td>
                        <td ><input id="service_total"  type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #abfc9e;" readonly></td>
                      </tr>

                    </table>

              </div>
              </div>
   
        
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger" id="update_btn">Update</button>
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
<!--<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="assets/js/jquery-1.10.2.min.js"></script>
<script src = "assets/JqueryUI/jquery-ui.min.js"></script> -->
<!--<script src="assets/js/jquery.min.js"></script> -->
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



<script type="text/javascript">

</script>


<!-------------Worker Commision Details logic --------------->
  <script type="text/javascript">
      $(document).on('click','.select_comission',function(){
       var commision_id = $(this).attr("commision_id");

  
      $.post('selectworkercommision',{commisionId:commision_id},function(data)
       {

          


               var result = JSON.parse(data);
        
                for(var x = 0 ; x < result.length ; x ++)
                {

                    //populate  data from worker commision
                    $('#commision_ID').text(result[x]['commission_id']);
                    $('#Worker_name').val(result[x]['personnel']);
                    $('#partners_name').val(result[x]['partner']);
                    $('#plate_number').val(result[x]['plate']);
                    $('#discount').val(result[x]['discount']);
                    $('#add_charges').val(result[x]['others_amount']);
                    $('#size').val(result[x]['size']);
                    $('#type').val(result[x]['type']);
                    $('#add_charges').val(result[x]['others_amount']);
                    $("#disc_note").val(result[x]['discount_notes']);
                    $('#additional').val(result[x]['additional_notes']);
                    $('#mng_discount').val(result[x]['mng_discount']);
               


                    //customer booking info
                    $('#customer_name').text("Customer: "+result[x]['Name']);
                    $('#customer_date').text("Date: "+result[x]['date']);
                    $('#customer_time').text("Time: "+result[x]['time']);
                    $('#customer_contactnum').text("Contact: "+result[x]['contactNum']);
                    $('#customer_address').text("Address: "+result[x]['address']);
                    $('#customer_cartype').text("Car Type/Model: "+result[x]['car_type']);



                    //billing table
                    $('#package_label').text(result[x]['type']+" Package -"+result[x]['size']);
                    $('#discount_amount').val(result[x]['discount_amount']);
                    $('#other_amount').val(result[x]['others_amount']);
                    $('#show_mng_discount').val(result[x]['mng_discount']);
                    $('#service_total').val(result[x]['total']);

                    // alert(result[x]['total']);

                }

                var size = $('#size').val();
                var type = $('#type').val();
                var package_prize = 0;
                    //if else statement for showing Package/size Rate
                    if (type == "Basic"){
                        if (size == "Small") {
                            package_prize = 280;
                        }else if(size == "Medium"){
                   
                          package_prize = 300;
                        }else if(size == "Large"){
         
                          package_prize = 350;
                        }else if(size == "Extra Large"){
                          package_prize = 400;
                        }
                    }

                    if (type == "Premium"){
                        if (size == "Small") {
                            package_prize = 460;
                        }else if(size == "Medium"){
      
                           package_prize = 500;
                        }else if(size == "Large"){
                           package_prize = 600;
                        }else if(size== "Extra Large"){ 
                           package_prize = 700;
                        }
                    }
                    if (type == "Ultimate"){
                        if (size == "Small") {
                            package_prize = 640;
                        }else if(size == "Medium"){
                            package_prize = 700;
                        }else if(size == "Large"){
                            package_prize = 850;
                        }else if(size == "Extra Large"){
                            package_prize = 1000;
                        }
                    }
                   $('#package_amount').val(package_prize);


                    //worker commision 
                    var worker1 = $('#Worker_name').val();
                    var worker2 = $('#partners_name').val();
                    var commision = 0;
                    $('#worker1').text(worker1);

                    if(worker2 == "none"){
                      commision = package_prize * 0.2;
                      $('#worker1_commision').text("₱ "+commision);
                      $('#worker2_commision').text(" ");
                      $('#worker2').text(" ");

                    }else{
                       commision = (package_prize * 0.2)/2;
                       $('#worker1_commision').text("₱ "+commision);
                       $('#worker2_commision').text("₱ "+commision);

                       $('#worker2').text(worker2);
                    }

        });  

  });
  </script>

<!-- update Worker -->
  <script type="text/javascript">
     $(document).on('click','#update_btn',function(){
           var c_id    = $('#commision_ID').text();//worker commision ID

           var p_staff = $('#Worker_name').val();
           var s_staff = $('#partners_name').val(); 
           var c_size = $('#size').val();
           var package = $('#type').val(); 
           var add_charges =$('#add_charges').val();
           var ac_reason = $('#additional').val();
           var mng_dis = $('#mng_discount').val();
           var disc_n = $('#disc_note').val();
           var p_num = $('#plate_number').val();
           var package_prize = 0;

           var discount = $('#discount').val(); 
           var discount_amount = 0;
           var discount_percentage = 0;

                    //if else statement get the Package/size Rate
                    if (package == "Basic"){
                        if (c_size == "Small"){
                            package_prize = 280;
                        }else if(c_size == "Medium"){
                   
                          package_prize = 300;
                        }else if(c_size == "Large"){
         
                          package_prize = 350;
                        }else if(c_size == "Extra Large"){
                          package_prize = 400;
                        }
                    }
                    if (package == "Premium"){
                        if (c_size == "Small") {
                            package_prize = 460;
                        }else if(c_size == "Medium"){
      
                           package_prize = 500;
                        }else if(c_size == "Large"){
                           package_prize = 600;
                        }else if(c_size== "Extra Large"){ 
                           package_prize = 700;
                        }
                    }
                    if (package == "Ultimate"){
                        if (c_size == "Small") {
                            package_prize = 640;
                        }else if(c_size == "Medium"){
                            package_prize = 700;
                        }else if(c_size == "Large"){
                            package_prize = 850;
                        }else if(c_size == "Extra Large"){
                            package_prize = 1000;
                        }
                    }    
                    //updated 1/18/2022
                    if (package == "EID"){
                        if (c_size == "Small") {
                            package_prize = 2500;
                        }else if(c_size == "Medium"){
                            package_prize = 2800;
                        }else if(c_size == "Large"){
                            package_prize = 3000;
                        }else if(c_size == "Extra Large"){
                            package_prize = 3500;
                        }                        
                    }

              //get the discount ammount 
              if(discount == "Ten"){ discount_percentage = 0.1;}
              else if(discount == "twenty"){ discount_percentage = 0.2;}
              else if(discount == "thirty"){ discount_percentage = 0.3;}
              else if(discount == "forty"){ discount_percentage = 0.4;}
              else if(discount == "fifty"){ discount_percentage = 0.5;}
              else if(discount == "sixty"){discount_percentage = 0.6;}
              else if(discount == "seventy"){discount_percentage = 0.7;}
              else if(discount == "eighty"){discount_percentage = 0.8;}
              else if(discount == "ninety"){discount_percentage = 0.9;}

              //calculate the amount of discount base of the package
              discount_amount = package_prize * discount_percentage;
              
              //get the updated Total Price      
              var totalamount = package_prize - discount_amount  - add_charges - mng_dis;
       
       $.post('updateworkercommision',{commisionId:c_id,staff1:p_staff,staff2:s_staff,p_type:package,size:c_size,charges:add_charges,a_reason:ac_reason,mnger_discount:mng_dis,total:totalamount,discount:discount_amount,disc_note:disc_n,discount_name:discount,plate_num:p_num},function(data)
       {  
          alert("Updated");
          window.location.replace("listofworkercommision");
   
       }); 

     });
  </script>


  <!-- realtime summary -->
  <script type="text/javascript"> 

  $(document).on('change','#type',function(){  
    size = $('#size').val();
    type = $(this).val();
    $('#package_label').text(type +" Package -"+size);
    package_amount = p_amount();
    $('#package_amount').val(package_amount);
     discount_percentage = discountAmount();
     discount_amount =  package_amount * discount_percentage;
    $('#discount_amount').val(discount_amount);
    calculate();

  });

  $(document).on('change','#size',function(){  
    size = $(this).val();
    type = $('#type').val();
    $('#package_label').text(type +" Package -"+size);
    package_amount = p_amount();
    $('#package_amount').val(package_amount);
     discount_percentage = discountAmount();
     discount_amount =  package_amount * discount_percentage;
    $('#discount_amount').val(discount_amount);
    calculate();

  });

  $(document).on('change','#discount',function(){  
       discount_percentage = discountAmount();
       package_amount = p_amount();
       discount_amount =  package_amount * discount_percentage;
       $('#discount_amount').val(discount_amount);
       calculate();
  });

  $(document).on('keyup','#add_charges',function(){ 
       charges = $(this).val();
       $('#other_amount').val(charges);
       calculate();
  });

  $(document).on('keyup','#mng_discount',function(){ 
      mng_dis = $(this).val();
      $('#show_mng_discount').val(mng_dis);
      calculate();
  });


function discountAmount(){
  var discount = $('#discount').val(); 
  discount_percentage = 0;
              //get the discount ammount 
              if(discount == "Ten"){ discount_percentage = 0.1;}
              else if(discount == "twenty"){ discount_percentage = 0.2;}
              else if(discount == "thirty"){ discount_percentage = 0.3;}
              else if(discount == "forty"){ discount_percentage = 0.4;}
              else if(discount == "fifty"){ discount_percentage = 0.5;}
              else if(discount == "sixty"){discount_percentage = 0.6;}
              else if(discount == "seventy"){discount_percentage = 0.7;}
              else if(discount == "eighty"){discount_percentage = 0.8;}
              else if(discount == "ninety"){discount_percentage = 0.9;}
  return discount_percentage;
}

  function p_amount(){
    c_size= $('#size').val();
    package = $('#type').val();
    package_prize = 0;

   

                    if (package == "Basic"){
                        if (c_size == "Small"){
                            package_prize = 280;
                        }else if(c_size == "Medium"){
                   
                          package_prize = 300;
                        }else if(c_size == "Large"){
         
                          package_prize = 350;
                        }else if(c_size == "Extra Large"){
                          package_prize = 400;
                        }
                    }
                    if (package == "Premium"){
                        if (c_size == "Small") {
                            package_prize = 460;
                        }else if(c_size == "Medium"){
      
                           package_prize = 500;
                        }else if(c_size == "Large"){
                           package_prize = 600;
                        }else if(c_size== "Extra Large"){ 
                           package_prize = 700;
                        }
                    }
                    if (package == "Ultimate"){
                        if (c_size == "Small") {
                            package_prize = 640;
                        }else if(c_size == "Medium"){
                            package_prize = 700;
                        }else if(c_size == "Large"){
                            package_prize = 850;
                        }else if(c_size == "Extra Large"){
                            package_prize = 1000;
                        }
                    }
                     //updated 1/18/2022
                    if (package == "EID"){
                        if (c_size == "Small") {
                            package_prize = 2500;
                        }else if(c_size == "Medium"){
                            package_prize = 2800;
                        }else if(c_size == "Large"){
                            package_prize = 3000;
                        }else if(c_size == "Extra Large"){
                            package_prize = 3500;
                        }                        
                    }
      return  package_prize;                  
  }

  //this function shows the billing statement 
  //realtime if their is a changes
  function calculate() {
    
      package_amount = $('#package_amount').val();
      discount_amount  = $('#discount_amount').val();
      other_amount     = $('#other_amount').val();
      mng_amount       = $('#show_mng_discount').val();

      total = package_amount-discount_amount-other_amount-mng_amount;

      $('#service_total').val(total);
     
  }
  </script>



  <script src="assets/design/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>