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
</head>
<body id="<?php echo $current_page["PageName"]; ?>">