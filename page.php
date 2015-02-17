<!DOCTYPE html>
<html>
<head>
    <?php
    $page = $_GET["page"];
    require( 'head.php' );
    include('./googleanalytics.php');
    ?>
</head>
<body>
    <!--[if lte IE8]>
	<p>You are using a <em>very old</em> version of Internet Explorer which is not compatible with this site. To view this site, <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a></p>
    <![endif]-->
    <div class="ie">
	    <?php include( 'navbar.php'); ?>
	    <div id="background" class="valign-outer">
		    <?php include( 'pages/' . $page . '.php'); ?>
	    </div>
	    <?php include( 'footer.php'); ?>
    </div>
</body>

</html>

