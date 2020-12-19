<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>
<head>
    <title>Photography</title>
    <!-- Custom styles for this template -->
    <link href="css/logo.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
  <nav class="navbar"  style="background-image: url('images/wbcg.png');">
  <div class="row">
    <div class="column">
    <!-- Logo -->
    <div class="logo">
            <div class="Polaroid">
                <div class="Opolaroid">
                <div class="Ipolaroid"></div>
                </div>
            </div>
            <div class="Camera">
                <div class="CaptureB"></div>
                <div class="Bcamera">
                    <div class="Olens">
                        <div class="Ilens"></div>                   
                    </div>
                    <div class="Flash"></div>
                </div>
            </div>          
    </div>
    </div>
    <div class="column">
    <div class="link">
     <ul>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#about">ABOUT</a></li>
     </ul>
    </div>
    </div>
    <div class="column">
    <div class="SecondLogo">
    <div class="curve"></div>
        <div class="Polaroid1">
        <div class="Opolaroid">
        <div class="Ipolaroid"></div>
        </div>
        </div>
    <div class="clip1"></div>
    <div class="Polaroid2">
        <div class="Opolaroid">
        <div class="Ipolaroid"></div>
        </div>
    </div>
    <div class="clip2"></div>
        <div class="Polaroid3">
        <div class="Opolaroid">
        <div class="Ipolaroid"></div>
        </div>
    </div>
    <div class="clip3"></div>
    <div class="Polaroid4">
        <div class="Opolaroid">
        <div class="Ipolaroid"></div>
        </div>
    </div>
    <div class="clip4"></div>
    </div>
    </div>
    </div>
  </nav>
  <div id="container">
		 <?php
		 switch ($module) {
			case 'Home':
				require_once 'home.php';
			break;
			default:
				require_once 'home.php';
			break;
      }
				?>
    </div>
  
</body>
<footer>
</footer>
</html>