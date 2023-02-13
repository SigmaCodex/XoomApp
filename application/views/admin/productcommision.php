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
              <h6>List Of Product Commision</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Staff</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>


                  <tbody id="TableID">
                      <?php  
                      foreach ($details as $s) {
                      ?>
                      <tr data-toggle="modal" class="select_comission" href="#ModalCommisionDetails" product_commision_id = "<?php echo $s->product_commission_id;?>">
                      <td>

                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"></h6>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $s->product_commission_id;?></p>
                          
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $s->customer_name;?></p>
                      </td>
                      <td class="align-middle text-center">
                   
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $s->date;?></span>
                      </td>
 
                       <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $s->personnel;?></p>
                       
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
          <h4 class="modal-title">Product List Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                      <h6 class="mb-0">ProductCommision ID: </h6> <h6 class="mb-0" id="product_commision_ID">1</h6>
                    </div>
                  </div>
                </div>

                <div class="card-body p-3">
                  <div class="row">
                    
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Primary Staff</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="Worker_name" disabled="">
                          </div>
                      </div>
                    </div>

                  <div class="col-md-12 mb-md-0 mb-6 ">
                      <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                          <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                          
                            </div>
                          </div>
                        </div>

                       <div class="card-body p-3 pb-0">
                        <h6 class="mb-1 text-dark font-weight-bold text-sm" id="show_date">Date: </h6>
                        <h6 class="mb-1 text-dark font-weight-bold text-sm" id="show_name">Customer name: </h6>
                        <h6 class="mb-1 text-dark font-weight-bold text-sm" id="show_contact">Contact:</h6>
                        <br>

                       </div>

                      </div>
                    </div>



                    <div class="col-md-12 mb-md-0 mb-12 ">
                      <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                          <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                              <h6 class="mb-0">List of Products</h6>
                            </div>
                          </div>
                        </div>
                        <div class="card-body p-5 pb-0">
                          <div class="table-responsive p-0">
                              <table class="table table-hover table-responsive-xs">
                                    <thead>
                                      <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Total</th>                          
                                      </tr>
                                    </thead>
                                    <tbody  id="table_list">
<!--                                       <tr>
                                        <td>Wax</td>
                                        <td> 0</td>
                                        <td  id="wax_quantity_output">₱0</td>   
                                      </tr>
                                         <tr>
                                        <td>Engine Shine</td>
                                        <td> 1</td>
                                        <td class="table-success"id="engine_quantity_output">₱0</td>
                                      </tr>
                                         <tr>
                                        <td>Engine Degreaser</td>
                                          <td> 1</td>
                                          <td class="table-success"id="engine_degreaser_output">₱0</td>
                                      </tr>
                                      <tr>
                                        <td>Freshener </td>
                                       <td>1</td>
                                          <td class="table-success"id="freshener_output">₱0</td>
                                      </tr>
                                      <tr>
                                        <td>Freshener </td>
                                       <td>1</td>
                                          <td class="table-success"id="freshener_output">₱0</td>
                                      </tr>                                      
                                       <tr>
                                        <td>Watermarks Remover </td>
                                          <td> 1</td>
                                          <td  class="table-success" id="water_remover_output">₱0</td>
                                      </tr> -->
                                    </tbody>
                                  </table>
                          </div>      
                                   <br>
                                   <h6 class="mb-1 text-dark font-weight-bold text-sm" id="total">Total:</h6>
                                    <br>
                        </div>
                      </div>
                    </div>

             <br>       
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
<!--<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
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

<!-------------Product Commision Details logic --------------->
  <script type="text/javascript">
      $(document).on('click','.select_comission',function(){
       var p_commision_id = $(this).attr("product_commision_id");

  
      $.post('selectproductcommision',{product_commisionId:p_commision_id},function(data)
       {

               var result = JSON.parse(data);
        
                for(var x = 0 ; x < result.length ; x ++)
                {
                    $('#Worker_name').val(result[x]['personnel']);
                    $('#show_date').text("Date: "+result[x]['date']);
                    $('#show_name').text("Customer Name: "+result[x]['customer_name']);
                    $('#show_contact').text("Contact: "+result[x]['customer_contact_number']); 
                    $('#total').text("Total: "+result[x]['total']);     
                }

        }); 

       $("#table_list").html("");
       $.post('selectlistorder',{product_commisionId:p_commision_id},function(data)
       {

               var result = JSON.parse(data);
        
                for(var x = 0 ; x < result.length ; x ++)
                {
                     $("#table_list").append('<tr><td>'+result[x]['product_name']+'</td><td>'+result[x]['quantity']+'</td><td  id="wax_quantity_output">₱'+result[x]['subtotal']+'</td>   </tr>');
                }

        });   


  });
  </script>



  <script src="assets/design/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>