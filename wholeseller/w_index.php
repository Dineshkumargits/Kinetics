<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Beta Crackers Login</title>

    <!-- Bootstrap -->

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/styles.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" type="image/png" href="../image/icon.png"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    
    <style>
     .my-carousel
     {
      position: absolute;
      width: 100%;
      top: 0;
     }

     .my-nav
     {
      position: absolute;
     width: 100%;
     z-index: 999;
     background: none;
     border: 0;
     border-radius: 0;
     background-color: none;
     }
    </style>

  </head>

  <body>

    <!-- Responsive Navigation bar  -->

    <div class="my-nav navbar navbar-inverse navbar-fixed-top">

      <div class="container-fluid">

        <div class="navbar-header">

          <a href="../welcome/" class="navbar-brand">BETA</a>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

        </div>

        <div id="myNavbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">

            <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>

            <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i> Product</a></li>

            <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> Contact</a></li>

            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Users</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="wholeseller_logins/w_login.php"><i class="glyphicon glyphicon-log-in"></i> Signin</a></li>

            <li><a href="wholeseller_logins/w_register.php"><i class="glyphicon glyphicon-log-out"></i> SignUp</a></li>

          </ul>
          
        </div>

      </div>

    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div id="mySlider" class="my-carousel carousel slide" data-ride="carousel">

            <!-- Indicators dot nov -->

            <ol class="carousel-indicators">

              <li data-target="#mySlider" data-slide-to="0" class="active"></li>
              
              <li data-target="#mySlider" data-slide-to="1"></li>


              <li data-target="#mySlider" data-slide-to="2"></li>

              <li data-target="#mySlider" data-slide-to="3"></li>
            
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox" >

              <div class="item active">

                <img src="../image/pic1.jpg" alt="cracker1" class="img-responsive"/>

                <div class="carousel-caption">

                  <h1>Crackers</h1>

                </div>

              </div>
              
           <div class="item">
                  
                <img src="../image/pic2.jpg" alt="cracker2" class="img-responsive" />
                  
                <div class="carousel-caption">
                  
                  <h1>Crackers2</h1>
                  
                </div>
                  
              </div>

            

            <div class="item">
                
              <img  src="../image/pic2.jpg" alt="cracker3" class="img-responsive"/>
                              
              <div class="carousel-caption">
                              
               <h1>Cracker3</h1>
                              
              </div>
                
            </div>

            <div class="item">
                
              <img  src="../image/pic1.jpg" alt="cracker4" class="img-responsive"/>
                
              <div class="carousel-caption">
                
                <h1>Crackers4</h1>
                
              </div>
                
            </div> 

            <!-- Controls such as next and precious buttons -->

            <a class="left carousel-control" href="#mySlider" role="button" data-slide="prev">

              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

              <span class="sr-only">Previous</span>

            </a>

            <a class="right carousel-control" href="#mySlider" role="button" data-slide="next">
                
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                
              <span class="sr-only">Next</span>
                              
            </a>

          </div>

        </div>

      </div>

    </div>




    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

