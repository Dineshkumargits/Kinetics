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
    <title>WholeSeller Login</title>

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
                <li><a href="#"><i class="glyphicon glyphicon-log-in"></i> Signin</a></li>
                <li><a href="w_register.php"><i class="glyphicon glyphicon-log-out"></i> SignUp</a></li>
            </ul></div>
            </div>
        </div>

        <!-- Login Forms -->

        
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 style="margin-top:50px; font-family:'Exo 2', sans-serif" class="text-center"></h1>
            </div>
        </div>
            <div class="row">
            <div class="wrap-login col-md-4 col-md-offset-4">
                <h2 style="margin-bottom:30px">WholeSeller Login</h2>
                <form action="w_login.php" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control"name="pass" placeholder="password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                   <button class="btn btn-default" name="login" type="submit">Login</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center" style="margin-top:30px;">
                <a href="w_register.php"><h4>Create New Account?</h4></a>
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

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if(!empty($email)&&!empty($pass)){
        $query="SELECT * FROM `crackers`.`whole_signing_table` WHERE `email`='$email' AND `password`='$pass'";
        $run=mysqli_query($con,$query);
        if(mysqli_num_rows($run)>0){
            echo'<script language="javascript">alert("Login Successfully")</script>';
        }else{
            echo '<script language="javascript">alert("The entered credentials are incorrect.")</script>';
        }
    }else{
        echo '<script language="javascript">alert("Fill all fields")</script>';
    }
}

?>
