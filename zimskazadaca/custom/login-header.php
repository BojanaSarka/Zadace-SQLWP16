<header>
  <div class="inner">
    <h1 class="logo"><a href="index.php">Pet clinic</a></h1>
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