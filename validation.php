<?php
include ('_dbconnect.php');


$username = $_POST['username'];
$password = $_POST['pswrd'];

$s = "select * from user_reg WHERE username = '$username' && password = '$password' ";


$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num>0){ 
    $_SESSION['username']=$username;    
    header("location: login.php");
}
else{
    echo "Invalid";
}



?>