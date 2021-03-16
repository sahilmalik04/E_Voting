 </br> <br> <br> </br>

<?php

include ('_dbconnect.php');
$user = ($_SESSION['username']);
?>

<html>
<head> 
<title> logged.in </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <style>     
    body{
    background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url(/pictures/PqICny.jpg);
    background-size: cover;
}
.dropdown {
    color: rgb(235, 231, 231);
    font-weight: bold;
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px 0px;
    z-index: 1;
    margin-top: 3px;
    width: 118px;
    height: 100px;
    right: -14px;
  }
  .dropdown-content a{
    color: black;
    padding: 10px 14px;
    text-decoration: none;
    font-size: 15px;
}
  .dropdown-content a:hover{
      background: lightblue;
      
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  #usrtop{
    padding: 5px 10px;
    cursor: pointer;
  }
  #usrtop:hover{
    text-decoration: none;
    background-color: rgba(78, 204, 40, 0.575);
  }
  .jumbo{
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #cfeb54de;
    border-radius: .3rem;
    opacity: 0.9;
}
.jumbo-vote{
    display:none;
}
 .jumbo:hover .jumbo-vote{
     display: block;
    border-radius: .3rem;
    opacity: 0.6;
}
    </style>

</head>

<body>
<nav class="topnavbar fixed-top navbar-header page-scroll">
    <a class="navbar-brand ml-4" href="#">
        <img src="pictures/download.png" class="rounded" alt="Logo" style="width:40px;">
      </a>
            <div class="nav-links mr-3">
                <ul>
                    <li> <a href="#"> Home </a></li>
                    <li> <a href="#"> About </a></li>
                    <li> <a href="#"> Developer </a></li>
                    <li> <a href="#"> Contact</a></li>
                    <div class="dropdown">
                    <span id="usrtop"><?php echo $user ?></span>
                    <div class="dropdown-content">
                    <a href="#"> My Account </a> <br> <br>
                    <a href="logout.php" onclick=fun();> Logout </a>
                    </div>
                    </div>
                </ul>
            </div>
        </nav>    

        <div class="container">
            <div class="row">
                <div class="col-md-3">
        <div class="container">
  <div class="card text-light bg-secondary" style="width:245px; height:350px">
    <img class="card-img-top mx-auto" src="pictures/img_avatar3.png" alt="Card image" style="width:80px" height="80px">
    <div class="card-body text-center">

    <?php
    $query = "select * from `user_reg` where username = '$user'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data)
    ?>

       <h5 class='card-title'> <?php echo $result['name'] ?> </h5>
       <p class='card-text'> <?php echo $result['DOB'] ?>   </p>  
      <p class="card-text"><?php echo $result['City'] ?> </p>
      <p class="card-text"><?php echo $result['State'] ?> </p>
    </div>
  </div>
</div>
</div>

        <div class="col-md-5 offset-md-4">
            <form action="user_vote.php" method="POST">      
        <div class="jumbotron jumbo">
            <div class="innerimg">
                <img src="pictures/download (1).png" class="ml-1" height="60px" width="60px">
                <span class="text-center ml-5"> &nbsp; &nbsp; &nbsp; Bhartiya janta party (BJP)</span>
            </div>
        <div class="jumbo-vote font-weight-bold">
            <label for="party">  <label>
            <input type="radio" value="BJP" name="party" id="party" class="mt-2">  VOTE!
        </div>
        </div>

        <div class="jumbotron jumbo">
            <div class="innerimg">
                <img src="pictures/2.png" class="ml-1" height="60px" width="60px">
        <span class="text-center ml-5"> &nbsp; &nbsp; &nbsp; Bhaujan Samaj party (BSP)</span>
        </div>
        <div class="jumbo-vote font-weight-bold">
            <label for="party">  <label>
            <input type="radio" value="BSP" name="party" id="party" class="mt-2">  VOTE!
        </div>
        </div>

            <div class="jumbotron jumbo">
            <div class="innerimg">
                <img src="pictures/download (2).png" class="ml-1" height="60px" width="60px">
                <span class="text-center ml-5"> &nbsp; &nbsp; &nbsp; Bhartiya congress party (BCP)</span>
            </div>
            <div class="jumbo-vote font-weight-bold">
            <label for="party">  <label>
            <input type="radio" value="BCP" name="party" id="party" class="mt-2">  VOTE! 
            </div>
            </div>

            <div class="jumbotron jumbo">
            <div class="innerimg">
                <img src="pictures/1554915296.png" class="ml-1" height="60px" width="60px">
                <span class="text-center ml-5"> &nbsp; &nbsp; &nbsp; Aam Aadmi party (AAP)</span>
            </div>
        <div class="jumbo-vote font-weight-bold">
        <label for="party">  <label>
            <input type="radio" value="AAP" name="party" id="party" class="mt-2">  VOTE! 
        </div>
        </div>
      
        <button class="btn btn-primary" name="submit"> Submit </button>

</form>
</div>

</div>
</div>

<script>
function fun(){
alert('Are you Sure??');
}
</script>


