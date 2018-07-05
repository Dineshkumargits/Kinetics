 <?php

// if($con=mysqli_connect("localhost","adk","1234","crackers")){
//     echo'connected';
// }
// else{
//     echo"not connected";
// }

?> 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Beta Crackers Login</title>

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="../../image/icon.png"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- <img src="image/crackers_bg.ng.jpg" alt="pic_crackers" class="background-image" style="position: fixed; width: 100%; height: 100%;"/> -->
    
     <!-- Responsive Navigation bar  -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a href="../../welcome/" class="navbar-brand">BETA</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>
            <div id="myNavbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../w_index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i> Product</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> Contact</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="w_login.php"><i class="glyphicon glyphicon-log-in"></i> Signin</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> SignUp</a></li>
            </ul></div>
            </div>
        </div>

        <!-- Register Forms -->
        
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 style="margin-top:50px; font-family:'Exo 2', sans-serif" class="text-center"></h1>
            </div>
        </div>
            <div class="row">
            <div class="wrap-login col-md-4 col-md-offset-4">
                <h2 style="margin-bottom:30px">WholeSeller SignUp</h2>
                <form action="w_register.php" method="post">
                    <div class="form-group">
                        <label>Legal Name:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Your name here">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                     <div class="form-group">
                        <label>Phone No.:</label>
                        <input type="tel" class="form-control" name="phone_no" placeholder="Enter your Mobile number">
                    </div>
                    <!-- <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">City
                             <span class="caret"></span></button> 
                            <ul class="dropdown-menu">
                                <li> <a href="#">&nbsp;Chennai</a></li>
                                <li><a href="#">&nbsp;Coimbatore</a></li>
                                <li><a href="#">&nbsp;Trichy</a></li>
                            </ul>
                   </div><br> -->

                    <select class="btn btn-primary dropdown-toggle" name="city">
                       <option>City</option>
                       <option>Chennai</option>
                       <option>Coimbatore</option>
                       <option>Trichy</option>
                   </select>
                   <br><br>
                   <button class="btn btn-default" name="register" type="submit">Register</button>
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 style="margin-top:50px; font-family:'Exo 2', sans-serif" class="text-center"></h1>
            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>




<?php



if(isset($_POST['register'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone_no=$_POST['phone_no'];
$city=$_POST['city'];
    if(!empty($username)){
        if(!empty($email)){
            if(!empty($password)){
                if(!empty($phone_no)){
                    if(!empty($city)){
                    
                        $select="SELECT * FROM `crackers`.`whole_signing_table` WHERE `email`='$email'";
                        $query_run=mysqli_query($con,$select);
                        // $result=mysqli_result($query_run);
                        if(mysqli_num_rows($query_run)>0){
                            echo '<script language="javascript">alert("Already There")</script>';
                        }else{
                           $mysqli=("INSERT INTO `whole_signing_table`(`id`, `user_name`, `password`, `email`, `phone_no`, `city`) VALUES (NULL,'$username','$password','$email',$phone_no,'$city')");
                           $query=mysqli_query($con,$mysqli);
                           if($query){
                               echo '<script language="javascript">alert("Registered Successfully");window.location.href = "w_login.php";</script>';
                              //header("location:login.php");
                              
                           }else{
                               echo '<script language="javascript">alert("Not Registered")</script>';
                           }
                        }
                    }else{
                        echo '<script language="javascript">alert("choose your area")</script>';
                    }
                    
                }else{
                    echo '<script language="javascript">alert("Enter Your Phone Number")</script>';
                }
            }else{
                echo '<script language="javascript">alert("Enter the password")</script>';
            }
        }else{
            echo '<script language="javascript">alert("Enter your email")</script>';
        }
    }else{
        echo '<script language="javascript">alert("Enter The username")</script>';
    }
}

?> 