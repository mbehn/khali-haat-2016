<?php 
if (isset($_GET["page"])) {
	$current_page_name = $_GET["page"];
} else {
	$current_page_name = "";
}

require_once("assets/includes/dbconnection.php");
require_once("assets/includes/functions.php");
?>
<?php include("assets/includes/layout/assets.php") ?>


<?php include_once("assets/includes/analyticstracking.php") ?>

<div id="container">
<?php include("assets/includes/layout/header.php") ?>

<div id="main-content-area">
	<div id="content">
		<?php 
			if (isset($current_page["PageTitle"])) { ?>
				<h1><?php echo $current_page["PageTitle"]; ?></h1>
		<?php } ?>
		<?php 
			if (isset($current_page["PageContent"])) { ?>
				<?php echo $current_page["PageContent"]; ?>
		<?php } ?>
	</div>	
</div>
<footer>
</footer>
</div>
<?php include("assets/includes/layout/footer.php") ?>