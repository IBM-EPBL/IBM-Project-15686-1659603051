<!DOCTYPE html>
<html>
<head>
        <title>USER REGISTRATION 1 | PHP</title>
</head>
<body>
        <div>
<?php
                if(isset($_POST['create'])){
                   echo'User submitted.';
                }
                ?>
                </div>
   <div>
        <form action="registration.php" method="post">
            <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with correct values</p>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" name="Lastname" required>

            <label for="email"><b>Email Address</b></label>
            <input type="email" name="email" required>

            <label for="Phonenumber"><b>Phone Number</b></label>
            <input type="text" name="phonenumber" required>

            <label for="Password"><b>Password</b></label>
            <input type="password" name="password" required>

            <input type="submit" name="create" value="Sign Up">
</div>
</form>
</div>
</body>
</html>
