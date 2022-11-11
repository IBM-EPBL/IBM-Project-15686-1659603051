<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
        <title>USER REGISTRATION 1 | PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div>
<?php
                
                ?>
                </div>
   <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                <div class="col-sm-3"> 
                       
                         <h1>Registration</h1>
                        
                         <p>Fill up the form with correct values</p>
                         <hr class="mb-3">
                          <label for="firstname"><b>First Name</b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>

                            <label for="lastname"><b>Last Name</b></label>
                           <input class="form-control" id="lastname" type="text" name="lastname" required>
                          
                      <label for="email"><b>Email Address</b></label>
                     <input class="form-control" id="email" type="email" name="email" required>
                         <label for="password"><b>password</b></label>       
                <input class="form-control" id="password" type="password" name="password" required>

                             <label for="Blood Group"><b>Blood Group</b></label>
                <input class="form-control" id="Blood Group" type="text" name="Blood Group" required>
                           <label for="Age"><b>age</b></label>
                  <input class="form-control" id="Age" type="text" name="Age" required>
                 
                 <label for="Phonenumber"><b>Phone Number</b></label>
                <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
                           <label for="city"><b>city</b></label>
                  <input class="form-control" id="city" type="text" name="city" required>
                           <label for="pincode"><b>pincode</b></label>
                  <input class="form-control" id="pincode" type="text" name="pincode" required>

                
                <hr class="mb-3">
                 <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">

        </div>
        </div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
        $(function(){
                $('#register').click(function(e){
                        var valid = this.form.checkValidity();
                        if(valid)
                        {
                        var firstname   = $('#firstname').val();
                        var lastname    = $('#lastname').val();
                        var email       = $('#email').val();
                        var password    = $('#password').val();
                        var bloodgroup  = $('#bloodgroup').val();
                        var phonenumber = $('#phonenumber').val();
                        var city        = $('#city').val();
                        var pincode     = $('#pincode').val();

                                e.preventDefault();

                                $.ajax({
                                        type: 'POST',
                                        url:'process.php',
                                        data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                                        success: function(data){
                                                Swal.fire({
                                                        'title': 'SUCCESFUL',
                                                        'text' : data,
                                                        'type' : 'success'
                                                })
                                        },
                                        error: function(data){
                                                Swal.fire({
                                                        'title': 'ERRORS',
                                                        'text' : 'There were errors while saving data',
                                                        'type' : 'error'
                                        })
                                }
                                });

                        }
                        else{
                                alert('false');
                        }
                      

                })
               
        });
 </script> 
</body>
</html>
