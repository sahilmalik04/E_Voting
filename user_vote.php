<html>
<head>
<title> </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
    body{
        background: black;
    }
    </style>
</head>

<?php

include ('_dbconnect.php');

$user = ($_SESSION['username']);
$preference = $_POST['party'];

$query = "SELECT * FROM `user_vote` where username = '$user'";

$result = mysqli_query($conn, $query);

if (!$preference){
    echo " error ";
}
else{
$reg = "INSERT INTO `user_vote` (`username`, `preference`, `date`) VALUES ('$user', '$preference', current_timestamp())";
mysqli_query($conn, $reg);
echo " '<script> $( function() {
            $('#dialog').dialog();
        } );
        </script>
        <div id='dialog' title='Success'>
        <p>Your Vote has been submit successfully</p>
        <a href='open.html' style='outline:none; text-decoration:underline; color:red;'> <b> Click here to Exit </b> </a>
        </div>'";
}
?>