<div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text"><?php echo $naslovAPP; ?></li>
            <li class="has-submenu">
              <a href="#">Meni</a>
              <ul class="submenu menu vertical" data-submenu>
                <li<?php
    if ($_SERVER["PHP_SELF"] === $putanjaAPP . "index.php") {
      echo " class=\"active\"";
    }
      ?>><a href="<?php echo $putanjaAPP; ?>index.php"><?php echo $naslovAPP; ?></a></li>
                <li<?php
      if ($_SERVER["PHP_SELF"] === $putanjaAPP . "usluge.php") {
        echo " class=\"active\"";
      }
      ?>><a href="<?php echo $putanjaAPP; ?>usluge.php">Usluge</a></li>
                <li<?php
      if ($_SERVER["PHP_SELF"] === $putanjaAPP . "onama.php") {
        echo " class=\"active\"";
      }
      ?>><a href="<?php echo $putanjaAPP; ?>onama">O nama</a></li>

                <li<?php
      if ($_SERVER["PHP_SELF"] === $putanjaAPP . "login.php") {
        echo " class=\"active\"";
      }
      ?>><a href="login.php" class="button">Prijava</a>
                
                </li>
              </ul>
        </div>
      </div>
    </div>