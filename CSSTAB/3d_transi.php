<!DOCTYPE html>
<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>

<head>
  <meta name="viewport" content="width-device-width, initial-scale-1.0">
  <title>Portfolio</title>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="content">
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="current" href="index.php?mod=Cdemo">CSS Demo</a>
        <a href="#" style="cursor: default;">2D Transform</a>
        <a href="index.php?mod=CTr">
          <li>translate()</li>
        </a>
        <a href="index.php?mod=CSk">
          <li>skew()</li>
        </a>
        <a href="index.php?mod=CSc">
          <li>scale()</li>
        </a>
        <a href="index.php?mod=CRt">
          <li>rotate()</li>
        </a>
        <a href="index.php?mod=CLg">
          <li>CSS logo</li>
        </a>
        <a href="index.php?mod=C2dM">2D Matrix</a>
        <a href="index.php?mod=C2dTi">2D Transition</a>
        <a href="index.php?mod=C3dTf">3D Transform</a>
        <a href="index.php?mod=C3dM">3D Matrix</a>
        <a href="index.php?mod=C3dTi">3D Transition</a>
      </div>
      <div class="openSideNav">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" style="float:left;left:0;">&#9776; </span>
      </div>
      <div class="main">
        <a href="CSSTAB/camping" class="button2">CLE1: Culminating Learning Evidence (Prelim)</a>
      </div>
      <div class="aboutexp">
      </div>
    </div>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>
</body>

</html>