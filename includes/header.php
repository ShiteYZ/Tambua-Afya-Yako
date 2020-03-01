<!-- HEADER-->
<!DOCTYPE html PUBLIC"-//w3C//DTD HTML 1.0 Strict//EN"
     "http://www.w3.org/TR/html1/DTD/html1-strict.dtd">
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta equiv="X-UA-compatible" content="IE-edge">
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css">
        <link type="text/css" rel="stylesheet" href="css2/stylesheet.css">
        <script type="text/javascript" src="js/fypjava.js"></script>
        <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
        <title>TAMBUA AFYA YAKO HOME</title>
    </head>
    
    <body>
        <div class="container">
        <div class="bdy">
            <div class="banner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="afyaheader">
                        <img src="img/banner (2).png" alt="health-life" width="100%" height="100px">
                        </div>
                        <div class="afyaheader2">
                        Maisha yangu Afya yangu
                        </div>
                    </div>
                 </div>
            </div>
            <!--NAV BAR MENU-->    
                <ul class="nav navbar-nav navbar-right pagination">
                    <?php
						if(!(isset($_SESSION["username"])&&$_SESSION["password"])){
					?>
                          <li class="active"><a href="index.php?p=home">
                          <span class="glyphicon glyphicon-home"></span></a></li>
                          <li><a href="index.php?p=register"><span class="glyphicon glyphicon-user"></span> Jisajili</a></li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Ingia
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="index.php?p=Alogin"> Admin</a></li>
                              <li><a href="index.php?p=Dlogin"> Mganga</a></li>
                              <li><a href="index.php?p=Plogin"> Mgonjwa</a></li> 
                            </ul>
                          </li>
                    <?php
                        }
                    ?>
                    
                    <?php
						if((isset($_SESSION["username"])&&$_SESSION["password"])){
					?>
                         <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span>
                                            <?php
                                                print_r($_SESSION["username"]);
                                            ?>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="index.php?p=logout"><span class="glyphicon glyphicon-log-out"></span>  ondoka</a></li>
                            </ul>  
                          </li>
                    <?php
                        }
                    ?>
                    
                 </ul>
            
            <!--END NAVBAR MENU-->
            <hr style="border-color: blue"; /><hr />