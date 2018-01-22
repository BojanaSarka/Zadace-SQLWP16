<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
     <?php include_once 'include/head.php'; ?>
  </head>
  <body>
    

    <!-- Start Top Bar -->
    <?php include_once 'include/izbornik.php'; ?>
    <!-- End Top Bar -->
    <br>
    <div class="row">
      <div class="log-in-form" >
          <h4 class="text-center">Prijavite se</h4>
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
<br>
    <!-- You can now combine a row and column if you just need a 12 column row -->
    <?php include_once 'include/podnozje.php'; ?>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


    