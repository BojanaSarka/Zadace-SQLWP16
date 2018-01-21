<!DOCTYPE html>
<html lang="en">
<head>
<title>Log in form</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">
</head>
<body id="page1">
<!-- Header -->
<header>
  <div class="inner">
    <h1 class="logo"><a href="index-cisti.php">Pet clinic</a></h1>
 </div>
 <div>
   <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="POST" action="login-process.php">
    <p><input type="text" name="username" value="" placeholder="ID"></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p><input type="submit" name="commit" value="Login"></p>
  </form>
</div>
<?php 
if(isset($_GET['login_error']) ){
  echo '<p class="login-error">Wrong ID or password</p>';
}
?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 </div>
</header>
<!-- Footer -->
<footer>
  <div class="copyright"> &copy; 2018 <strong class="footer-logo">Pet clinic</strong>
  </div>
  <ul class="social-list">
    <li><a href="#"><img src="images/social-link-1.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-2.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-3.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-4.jpg" alt=""></a></li>
  </ul>
</footer>
</body>
</html>
