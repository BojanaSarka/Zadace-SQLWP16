<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Clinic</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mine.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<script>
$(function(){
	function equalHeight(group) {
		var tallest = 0;
		group.each(function() {
			var thisHeight = $(this).height();
			if(thisHeight > tallest) {
				tallest = thisHeight;
			}
		});
		group.height(tallest);
	}	
	equalHeight($(".box-1 .inner"));
})
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body id="page1">
<!-- Header -->
<header>
  <div class="inner">
    <h1 class="logo"><a href="index-cisti.php">Pet clinic</a></h1>
    <div class="fright">
      <div class="header-meta">
        <form action="#" id="search-form" method="post">
          <input type="text" onBlur="if(this.value==''){this.value='search'}" onFocus="if(this.value=='search'){this.value=''}" value="search" name="search">
          <a class="search-form-submit"></a>
        </form>
        <div class="col-elem"> Have a problem with your pet?<br>
          Call us now: <span class="phone"> 1-800-123-1234 </span> </div>
      </div>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index-cisti.php">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="login-cisti.php">LOG IN</a></li>
        </ul>
      </nav>
    </div>
    <div class="clear"></div>
  </div>
  <div class="slider-container">
    <div class="mp-slider">
      <ul class="items">
        <li><img src="images/slide-1.jpg" alt=""></li>
        <li><img src="images/slide-2.jpg" alt=""></li>
        <li><img src="images/slide-3.jpg" alt=""></li>
      </ul>
    </div>
  </div>
</header>
<!-- Content -->
<section id="content">
  <div class="container_24">
    <div class="indent-bot">
      <article class="grid_6">
        <div class="box-1">
          <div class="inner">
            <h3>Microchip implant</h3>
            <p> Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. </p>
            <div class="btn-container">
              <div class="button-box"> <a href="#" class="button">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class="grid_6">
        <div class="box-1">
          <div class="inner">
            <h3>Ultrasound</h3>
            <p class="p0"> <strong class="str-1"> Vivamus hendrerit mauris ut dui gravida ut viverra </strong> </p>
            <p> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis. cursus. </p>
            <div class="btn-container">
              <div class="button-box"> <a href="#" class="button">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class="grid_6">
        <div class="box-1">
          <div class="inner">
            <h3>Transport service</h3>
            <p> Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. </p>
            <div class="btn-container">
              <div class="button-box"> <a href="#" class="button">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class="grid_6">
        <div class="box-1">
          <div class="inner">
            <h3>Vaccinations</h3>
            <p class="p0"> <strong class="str-1"> Vivamus hendrerit mauris ut gravida ut viverra </strong> </p>
            <p> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. </p>
            <div class="btn-container">
              <div class="button-box"> <a href="#" class="button">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <div class="clear"></div>
    </div>
    <div class="indent-bot-1">
      <div class="grid_6">
        <div class="inner-indent">
          <h2>New articles:</h2>
          <ul class="list-1">
            <li><a href="#">Vivamus hendrerit mauris</a></li>
            <li><a href="#">gravida ut viverra</a></li>
            <li><a href="#">Cras mattis tempor eros</a></li>
            <li><a href="#">nec tristique Sed sed</a></li>
            <li><a href="#">felis arcu vel vehicula</a></li>
            <li><a href="#">Maecenas faucibus</a></li>
            <li><a href="#">sagittis cursus Fusce</a></li>
          </ul>
        </div>
      </div>
      <div class="grid_6 suffix_1">
        <div class="box-2">
          <h2>Innovation:</h2>
          <p class="p1"> <strong class="str-2"> Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. </strong> </p>
          <p class="p1"> This website template has several pages: Main, About, Services, Links, Contacts (note that contact us form - doesn't work). </p>
          <div class="alignright"> <a href="#" class="link">read more</a> </div>
        </div>
      </div>
      <div class="grid_11 indent-top">
        <h2><span>welcome</span> to our clinic!</h2>
        <div class="wrapper">
          <figure class="img-indent"> <img src="images/page1-img1.png" alt="" class="img-indent-bot">
            <div class="author"> <em>John Smith</em> (veterinary) </div>
          </figure>
          <blockquote class="quote extra-wrap"> <strong> Pet Clinic is one of Free website templates created by TemplateMonster.com team. </strong><br>
            This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. The PSD source files of this Pet Clinic template are available for free for the registered members of TemplateMonster.com. Feel free to get them! </blockquote>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="hr-border"></div>
    <div class="wrapper">
      <div class="grid_7 suffix_1">
        <div class="wrapper hr-border-1"> <span class="dropcap">A.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Wildlife Rehabilitation</a> </dt>
              <dd class="extra"> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. </dd>
            </dl>
          </div>
        </div>
        <div class="wrapper"> <span class="dropcap">B.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Grief Management in Children</a> </dt>
              <dd> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="grid_7 suffix_1">
        <div class="wrapper hr-border-1"> <span class="dropcap">C.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Loving Memories Services</a> </dt>
              <dd> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. </dd>
            </dl>
          </div>
        </div>
        <div class="wrapper"> <span class="dropcap">D.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Where To Bury Your Dog</a> </dt>
              <dd> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget. tristique cursus. </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="grid_7 suffix_1">
        <div class="wrapper hr-border-1"> <span class="dropcap">E.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Diagnostic Laboratory Services</a> </dt>
              <dd> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. </dd>
            </dl>
          </div>
        </div>
        <div class="wrapper"> <span class="dropcap">F.</span>
          <div class="extra-wrap">
            <dl class="def-list-1">
              <dt> <a href="#">Microchip Implantation</a> </dt>
              <dd> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique. </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <div class="hr-border"></div>
    <div class="clear"></div>
    <div class="wrapper">
    <article class="grid_7 suffix_1">
          <h2>Contact info:</h2>
          <div class="map-container img-box">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </div>
          <strong class="str-4">Pet clinic</strong>
          <dl class="adress">
            <dt>8901 Marmora Road, Glasgow, D04 89GR</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><a href="#">mail@demolink.org</a></dd>
          </dl>
        </article>
        <article class="grid_16">
          <h2>Contact form:</h2>
          <form action="index-cisti.php" id="contact-form" method="GET">
            <fieldset>
              <label class="name"> <span>Full name:</span>
                <input type="text" name="name">
              </label>
              <label class="email"> <span>Email:</span>
                <input type="email" name="email">
              </label>
              <label class="message"> <span>Message:</span>
                <textarea type="text"  name="message"></textarea>
              </label>
              <input   type="submit" value="Submit" />
            </fieldset>
          </form>
    <?php echo $_GET["name"] ?>
    <?php echo $_GET["email"] ?>
    <?php echo $_GET["message"] ?>
    
        </article>
      </div>
  </div>
</section>
<!--Footer section-->
<div class="clear"></div>
<!-- Footer -->
<footer>
  <div class="copyright"> &copy; 2018 <strong class="footer-logo">Pet clinic</strong></div>
  <ul class="social-list">
    <li><a href="#"><img src="images/social-link-1.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-2.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-3.jpg" alt=""></a></li>
    <li><a href="#"><img src="images/social-link-4.jpg" alt=""></a></li>
  </ul>
</footer>
</body>
</html>
