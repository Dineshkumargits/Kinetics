<?php

$db_host = "localhost";
$db_user_name = "root";
$db_pass_word = "";
$db = "Kinetic_DB";

try
{
$connection = new PDO("mysql:host=$db_host;dbname=$db", $db_user_name, $db_pass_word);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "select Headings from Side_Nav_Bar_Headings";

$get_value = $connection->prepare($query);

$get_value->execute();

$result = $get_value->setFetchMode(PDO::FETCH_ASSOC);

$result = $get_value->fetchAll();

$i = 0;

$headings = array();

$temp_value = "";

foreach($result as $temp_value)
{
    $headings[$i] = $temp_value["Headings"];

    $i++;
}

}
catch(PDOException $e)
{
    die();
}

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Kinetic Login</title>

        <!-- Bootstrap -->

        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/styles.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" type="image/png" href="../image/icon.png"/>

       <style>

        body 
        {
            position: relative;
        }
  
        .affix
        {
            top:0;
            width: 100%;
            z-index: 9999 !important;
        }

        .container
        {
            width: 100%;
            height: 100%;
        }

        .navbar 
        {
            margin-bottom: 0px;
        }

        .affix ~ .container-fluid
        {
            position: relative;
            top: 50px;
        }
        

       </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    </head>
  
    <body>
        
        
        
        <!-- Responsive Navigation bar  -->
      <div class="header">
        <nav class="my-nav navbar navbar-inverse" data-spy="affix" data-offset-top="200" style=" width:100%;  !important;">
        
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
        
                    <ul class="nav navbar-nav ">
        
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i>Home</a></li>
        
                        <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i> Product</a></li>
        
                        <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> Contact</a></li>
        
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Users</a></li>
        
                    </ul>
        
                    <ul class="nav navbar-nav navbar-right">
        
                        <li><a href="Customer_logins/login.php"><i class="glyphicon glyphicon-log-in"></i> Signin</a></li>
        
                        <li><a href="Customer_logins/register.php"><i class="glyphicon glyphicon-log-out"></i> SignUp</a></li>
        
                    </ul>
        
                </div>
        
            </div>

        </nav>

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

            <div class="carousel-inner" role="listbox" style=" width:100%; height: 100%; important;">

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

        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-9">
                        <h3>
                            Carousel Product Cart Slider</h3>
                    </div>
                    <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                                data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                    data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Product Example</h5>
                                                    <h5 class="price-text-color">
                                                        $249.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Next Sample Product</h5>
                                                    <h5 class="price-text-color">
                                                        $149.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Product with Variants</h5>
                                                    <h5 class="price-text-color">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Grouped Product</h5>
                                                    <h5 class="price-text-color">
                                                        $249.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Product with Variants</h5>
                                                    <h5 class="price-text-color">
                                                        $149.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        Product with Variants</h5>
                                                    <h5 class="price-text-color">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
