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
    <div class="header">
        <a class="navbar-brand" href="index.php?mod=Home">
            <image class="logo" src="SchlWrksLogo.svg" height="80" width="100" /></a>
        <a class="nav-link" href="index.php?mod=Abt">ABOUT ME</a>
        <a class="nav-link" href="index.php?mod=NHm">CANVAS</a>
        <a class="nav-link" href="index.php?mod=SHm">SVG</a>
        <a class="nav-link" href="index.php?mod=Cdemo">CSS</a>
    </div>
        <?php
        switch ($module) {
            case 'Home':
                require_once 'home.php';
                break;
            case 'Cdemo':
                require_once 'CSSTAB/cssdemo.php';
                break;
            case 'CTr':
                require_once 'CSSTAB/css_translate.php';
                break;
            case 'CSk':
                require_once 'CSSTAB/css_skew.php';
                break;
            case 'CSc':
                require_once 'CSSTAB/css_scale.php';
                break;
            case 'CRt':
                require_once 'CSSTAB/css_rotate.php';
                break;
            case 'CLg':
                require_once 'CSSTAB/css_logo.php';
                break;
            case 'C2dM':
                require_once 'CSSTAB/2d_matrix.php';
                break;
            case 'C2dTi':
                require_once 'CSSTAB/2d_transi.php';
                break;
            case 'C3dM':
                require_once 'CSSTAB/3d_matrix.php';
                break;
            case 'C3dTi':
                require_once 'CSSTAB/3d_transi.php';
                break;
            case 'C3dTf':
                require_once 'CSSTAB/3d_transf.php';
                break;
            case 'SHm':
                require_once 'SVGTAB/svg_home.php';
                break;
            case 'NHm':
                require_once 'CNVTAB/cnv_home.php';
                break;
            case 'Abt':
                require_once 'aboutMe.php';
                break;
            default:
                require_once 'home.php';
                break;
        }
        ?>
        <div class="footer">
        <h3>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Portfolio</h3>
        </div>
</body>

</html>