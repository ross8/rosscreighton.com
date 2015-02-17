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
    <div class="container-fluid">
	<div class="row">
	    <div class="col-xs-12 col-md-3">
		<div class="title col-md-12">
		    <div class="title-pic"></div>
		    Ross Creighton
		</div>
		<?php include( 'nav-stacked.php'); ?>
	    </div>
	    <div class="content col-xs-12 col-md-6">
		<?php include( 'pages/' . $page . '.php'); ?>
	    </div>
	    <div class="col-xs-12 col-md-3">
		<div class="sidebar">
		</div>
	    </div>
	</div>
	<div class="row">
	    <div class="footer col-md-12">
		<?php include( 'footer.php'); ?>
	    </div>
	</div>
    </div>
</body>

</html>
