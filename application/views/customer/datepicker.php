<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>jQuery UI Datepicker functionality</title>
      <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="assets/jqueryui/jquery-ui.min.css"> 
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "assets/JqueryUI/jquery-ui.min.js"></script>
      
    <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker" ).datepicker({
                minDate: 0,
               beforeShowDay : function (date) {
                  var dayOfWeek = date.getDay ();
                  // 0 : Sunday, 1 : Monday, ...
                  if (dayOfWeek == 3 ) return [false];
                  else return [true];
               }
            });
         });
      </script>
   </head>
   

   <style type="text/css">
     .example button {
  float: left;
  background-color: #4E3E55;
  color: white;
  border: none;
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  font-weight: 600;
  border-radius: 3px;
  padding: 15px 35px;
  margin: 26px 5px 0 5px;
  cursor: pointer; 
}
.example button:focus{
  outline: none; 
}
.example button:hover{
  background-color: #33DE23; 
}
.example button:active{
  background-color: #81ccee; 
}
   </style>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <body>
      <!-- HTML --> 
      <p>Enter Date: <input type = "text" id = "datepicker"></p>
        <div class="example">
    <button id="b1">A basic message</button>
    <button id="b2">A title with a text under</button>
    <button id="b3">A success message!</button>
    <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
    <button id="b5">... and by passing a parameter, you can execute something else for "Cancel".</button>
    <button id="b6">A message with a custom icon</button>
  </div>
   </body>

   <script type="text/javascript">
     document.getElementById('b1').onclick = function(){
  swal("Here's a message!");
};

document.getElementById('b2').onclick = function(){
  swal("Here's a message!", "It's pretty, isn't it?")
};

document.getElementById('b3').onclick = function(){
  swal("Good job!", "You clicked the button!", "success");
};

document.getElementById('b4').onclick = function(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, delete it!',
    closeOnConfirm: false,
    //closeOnCancel: false
  },
  function(){
    swal("Deleted!", "Your imaginary file has been deleted!", "success");
  });
};

document.getElementById('b5').onclick = function(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: "No, cancel plx!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
  });
};

document.getElementById('b6').onclick = function(){
  swal({
    title: "Sweet!",
    text: "Here's a custom image.",
    imageUrl: 'https://i.imgur.com/4NZ6uLY.jpg'
  });
};
   </script>
</html>