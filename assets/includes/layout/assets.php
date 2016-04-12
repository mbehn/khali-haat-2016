<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			if (isset($_GET["page"])) {
				$current_page =  getPageInfo($current_page_name); 	
			}
		?>
		Khali Haat - Afrobeat from Austin, TX - <?php echo $current_page["PageTitle"]; ?>

	</title>
	<meta name="description" content="<?php echo $current_page["PageDescription"]; ?>" />
	<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<link rel="icon" href="assets/images/album.jpg">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
	<script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="assets/jquery/sizzle/dist/sizzle.min.js"></script>	
	<link rel="stylsheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- bootstrap CDN -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> -->
	
	<!-- Latest compiled and minified JavaScript -->
	
</head>
<body id="<?php echo $current_page["PageName"]; ?>">