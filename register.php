<html>
    <head>
        <title> register.in </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</html>
<?php 

include ('_dbconnect.php');

mysqli_select_db($conn, 'e-voting');

$username = $_POST['username'];
$name = $_POST['name'];
$lastname = $_POST['lstname'];
$password = $_POST['pswrd'];
$cpswrd = $_POST['cpswrd'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$DOB = $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$s = " SELECT * FROM `user_reg` WHERE username = '$username' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num > 0){
    echo  " <div class='alert alert-danger' role='alert'>
            <a href='#' class='alert-link'> </a> Already registered 
            </div> </br>";
}  
elseif($password != $cpswrd) {
    echo " <script> alert('please make sure your passwords should match') </script>";
    exit();
}
else {
    $reg = "insert into user_reg(username, name, lastname, password, mobile, email, DOB, Address, City, State, Country)
    values('$username', '$name', '$lastname', '$password', '$mobile', '$email', '$DOB', '$address', '$city', '$state', '$country')";
    mysqli_query($conn, $reg);
    echo " <br> you have been registered baby '<h4> Now you can login at <a href='open.html'> Login.in </a> ";
}
?>
