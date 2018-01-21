<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noodp">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Pet clinic</title>
        <link rel="shortcut icon" href="../img/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/plugins.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
    
        <!-- PRELOADER -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- /PRELOADER -->

        <!-- NAVIGATION -->
        <nav class="navigation-main">

            <!-- CONTAINER FLUID -->
            <div class="container-fluid">

                <!-- NAVIGATION HEADER -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <a class="navbar-brand" href="index-cisti.php"><img class="img-responsive" src="../img/Petclinic.png" alt="" /></a>
                </div>
                <!-- /NAVIGATION HEADER -->

                <!-- NAVBAR -->
                <div id="navbar" class="navbar-collapse collapse">
                    <!-- MENU ITEMS LIST -->
                    <ul class="navigation-items nav navbar-nav navbar-right">
                        <li><a href="index-cisti.php">Povratak na početnu stranicu</a></li>
                    </ul>
                    <!-- /MENU ITEMS LIST -->
                </div>
                <!-- /NAVBAR -->
            </div>
            <!-- /CONTAINER FLUID -->
        </nav>
        <!-- /NAVIGATION -->
        
        <!-- INTRO -->
        <section id="intro">
            <!-- CONTAINER MID -->
            <div class="container-mid text-center">
                <!-- ANIMATION CONTAINER -->
                <div class="animation-container animation-fade-down" data-animation-delay="0">
                    <h3>Prijava</h3>
                    <form  action="login-process.php" method="POST">
                    <p>ID <br><input type="text" name="username" value="" placeholder="ID"></p>
                    <p>Lozinka <br><input type="password" name="password" value="Lozinka" placeholder="Password"></p>
                    <p><input type="submit" name="commit" value="Prijava"></p>
                    </form>
                    <?php 
                        if(isset($_GET['login_error']) ){
                          echo '<p class="login-error">Krivi ID ili lozinka</p>';
                        }
                        ?> 
                    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                </div>   
            </div>
                <!-- /ANIMATION CONTAINER -->
        </section>
        <!-- /INTRO -->
        <!-- FOOTER -->
        <section id="footer">
            <!-- CONTAINER FLUID -->
            <div class="container-fluid">
                <!-- ROW -->
                <div class="row">
                    <!-- COLUMN -->
                    <div class="col-sm-6 scroll-animated-from-bottom text-left">
                        <p>© 2017 Pet clinic | Design by Pet clinic</p>
                    </div>
                    <!-- /COLUMN -->
                    <!-- COLUMN -->
                    <div class="col-sm-6 scroll-animated-from-bottom text-right">

                        <!-- SOCIAL ICONS -->
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- /SOCIAL ICONS -->
                    </div>
                    <!-- /COLUMN -->
                </div>
                <!-- ROW -->
            </div>
            <!-- /CONTAINER FLUID -->
        </section>
        <!-- /FOOTER -->
        
        
        
        <!-- BACKGROUND CONTENT -->
        <div class="background-content parallax-on">

            <!-- BACKGROUND CONTENT INNER -->
            <div class="background-content-inner">
                <div class="background-overlay"></div>
                <div class="background-img layer" data-depth="0.1"></div>
            </div>
            <!-- /BACKGROUND CONTENT INNER -->
        </div>
        <!-- /BACKGROUND CONTENT -->
        
        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
   
   
   
    </body> 
    
    
</html>