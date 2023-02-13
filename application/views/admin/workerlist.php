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
          <div class="col-md-3 col-sm-3">
		 	 <button data-toggle="modal" href="#ModalAddWorker" type="button" class="btn btn-default">Add Staff</button> 
          </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Of Worker Staff</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Worker Staff Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>


                  <tbody id="TableID">
                  	  <?php  
                      foreach ($details as $s) {
                      ?>
                      <tr data-toggle="modal" class="select_workerstaff" href="#ModalWorkersDetails" worker_id = "<?php echo $s->worker_id?>"> 
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">                         
                            <p class="text-xs text-secondary mb-0">Worker ID:<?php echo $s->worker_id;?></p>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                         <p class="text-xs font-weight-bold mb-0"><?php echo $s->name?></p>      
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $s->username;?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $s->user_type;?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $s->status;?></span>
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




  <div class="modal fade" id="ModalAddWorker">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Worker Staff</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
               <div class="card-body p-3">

	               	<div class="row">
	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Name</label>
	                          <div class="input-group">
	                            <input type="text" class="form-control" id="workers_name">
	                          </div>
	                      </div>
	                    </div>  

	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Username</label>
	                          <div class="input-group">
	                            <input type="text" class="form-control" id="workers_Username">
	                          </div>
	                      </div>
	                    </div>

	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Password</label>
	                          <div class="input-group">
	                            <input type="password" class="form-control" id="workers_password">
	                          </div>
	                      </div>
	                    </div>
	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Confirm Password</label>
	                          <div class="input-group">
	                            <input type="password" class="form-control" id="workers_Cpassword">
	                          </div>
	                      </div>
	                    </div>
                    <div class="col-md-6">
                      <div class="form-group edit_info">
                          <label class="form-control-label" for="basic-url">Type</label>
                          <div class="input-group">
                           <!--  <input type="text" class="form-control" id="partners_name" > -->
                            <select class="form-control form-control" id="workers_type" style="background-color: #ffffff;">
                             <option value="Staff">Staff</option>
                             <option value="Manager">Manager</option>
                             <option value="Admin">Admin</option>
                            </select> 

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
          <button type="button" class="btn btn-outline-danger" id="addworker" disabled>Add Worker</button>
        </div>
        
      </div>
    </div>
  </div> 
  </div>

   <div class="modal fade" id="ModalWorkersDetails">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Worker Staff Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
              <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                      <h6 class="mb-0">Worker Staff ID: </h6> <h6 class="mb-0" id="staff_ID"></h6>
                    </div>
                  </div>
                </div>
               <div class="card-body p-3">

	               	<div class="row">
	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Name</label>
	                          <div class="input-group">
	                            <input type="text" class="form-control" id="selected_name">
	                          </div>
	                      </div>
	                    </div>  

	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Username</label>
	                          <div class="input-group">
	                            <input type="text" class="form-control" id="selected_username">
	                          </div>
	                      </div>
	                    </div>

	                    <div class="col-md-6 mb-md-0 mb-4">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Password</label>
	                          <div class="input-group">
	                            <input type="password" class="form-control" id="selected_password">
	                          </div>
	                      </div>
	                    </div>

	                    <div class="col-md-6">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Type</label>
	                          <div class="input-group">
	                           <!--  <input type="text" class="form-control" id="partners_name" > -->
	                            <select class="form-control form-control" id="selected_type" style="background-color: #ffffff;">
	                             <option value="Staff">Staff</option>
	                             <option value="Manager">Manager</option>
	                             <option value="Admin">Admin</option>
	                            </select> 

	                          </div>
	                      </div>
	                    </div>		


	                    <div class="col-md-6">
	                      <div class="form-group edit_info">
	                          <label class="form-control-label" for="basic-url">Type</label>
	                          <div class="input-group">
	                           <!--  <input type="text" class="form-control" id="partners_name" > -->
	                            <select class="form-control form-control" id="selected_status" style="background-color: #ffffff;">
	                             <option value="active">Active</option>
	                             <option value="deactive">Deactive</option>
	                            </select> 

	                          </div>
	                      </div>
	                    </div>	


	                </div>    
     
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" id="update_btn">Update Worker</button>
          <button type="button" class="btn btn-outline-danger" id="delete_btn">Delete Worker</button>
        </div>
        
      </div>
    </div>
  </div> 
  </div>       
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 <script src="assets/design/js/soft-ui-dashboard.min.js?v=1.0.2"></script>






<script type="text/javascript">
	$(document).on('keyup','#workers_Cpassword',function(){ 
        
        var workersPassword  =  $("#workers_password").val();
        var workersCpassword  =  $("#workers_Cpassword").val();

        if (workersPassword == workersCpassword ){
        	   $('#addworker').prop("disabled", false);
        }else{
        	   $('#addworker').prop('disabled', true);
        }
     	
     });
</script>



   <!-- add worker staff -->
    <script type="text/javascript">
    $(document).on('click','#addworker',function(){ 
        var workersName = $("#workers_name").val();
        var workersUsername  =  $("#workers_Username").val();
        var workersPassword  =  $("#workers_password").val();
        var workersType  =  $("#workers_type").val();
 	
 
        
         $.ajax({
              url:"addworkerstaff",
              method:"POST", 
              data:{name:workersName,username:workersUsername,password:workersPassword,type:workersType},
                success:function(data)
                {
                  alert("added");
              
                  window.location.replace("listofworkers");
                }
              });

    });
  </script>
<!--   select workerstaff -->
    <script type="text/javascript">
      $(document).on('click','.select_workerstaff',function(){
       var w_id = $(this).attr("worker_id");
      
    
      $.post('selectworkerstaff',{id:w_id},function(data)
        {
       
               var result = JSON.parse(data);
        
              
                for(var x = 0 ; x < result.length ; x ++)
                {
                    //workerlist
                    $('#staff_ID').text(result[x]['worker_id']);
                    $('#selected_name').val(result[x]['name']);
                    $('#selected_username').val(result[x]['username']);
                    $('#selected_password').val(result[x]['password']);
                    $('#selected_type').val(result[x]['user_type']).change();
                    $('#selected_status').val(result[x]['status']).change();
       
                     //$('#selected_type').val(result[x]['user_type']).change();
                   
                     

                }
        });

  });
  </script>

   <!-- update worker details-->
    <script type="text/javascript">
    $(document).on('click','#update_btn',function(){ 
        var s_worker_id = $("#staff_ID").text();
        var s_name  =  $("#selected_name").val();
        var s_username  =  $("#selected_username").val();
        var s_password  =  $("#selected_password").val();
        var s_type       =  $("#selected_type").val();
        var s_status  =  $("#selected_status").val();
   

 
        
         $.ajax({
              url:"updateworkerstaff",
              method:"POST", 
              data:{id:s_worker_id,name:s_name,username:s_username,password:s_password,type:s_type,status:s_status},
                success:function(data)
                {
              	  alert("updated");
                  window.location.replace("listofworkers");
                }
              });

    });
  </script>

    <!-- Delete worker staff-->
  <script type="text/javascript">
    $(document).on('click','#delete_btn',function(){ 
       var worker_id = $("#staff_ID").text();

        var r = confirm("Are sure you want to delete this Worker?");
         if (r == true) {
            $.post('deleteworkerstaff',{id:worker_id},function(data)
            {
                  alert("Record Deleted");
                  window.location.replace("listofworkers");
            });
        } else {
            console.log("no");
        }


        
    });
  </script>