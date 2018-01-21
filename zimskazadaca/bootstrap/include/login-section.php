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