<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $firstname   =$_POST['firstname'];
    $lastname    =$_POST['lastname'];
    $email       =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
    $password    =sha1($_POST['password']);

    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
    $stmtinsert =$db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
    if($result){
         echo 'successfully saved';
    }else{
         echo 'There were errors while saving the data';
    }
 }else{
    echo 'No Data';
 }
