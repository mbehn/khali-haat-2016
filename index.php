<?php
// if (!isset($_POST["page"])) {
// 	header("Location: "."http://localhost/khalihaat/index.php?page=home");
// } 
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
				<?php echo str_replace("\n","</br>",$current_page["PageContent"]); ?>
		<?php } ?>
		<?php 
			if ($current_page_name == 'contact') {
				include("assets/includes/layout/contact-form.php");
			}
		?>
		<?php 
		if ($current_page_name == 'login') {
				include("assets/includes/layout/login-form.php");
			}
		?>
		<?php 
			if ($current_page_name == 'music') {
					include("assets/includes/layout/music.php");
				}
		?>
		<?php 
			if ($current_page_name == 'manage_users') {
					include("assets/includes/layout/manage_users.php");
				}
		?>
		<?php 
			if ($current_page_name == 'manage_pages') {
					include("assets/includes/layout/manage_pages.php");
				}
		?>
		<?php 
			if ($current_page_name == 'create_page') {
					include("assets/includes/layout/create_page.php");
				}
		?>
		<?php 
			if ($current_page_name == 'create_new_admin') {
					include("assets/includes/layout/create_new_admin.php");
				}
		?>		
		<?php 
			if ($current_page_name == 'image_gallery') {
					include("assets/includes/layout/image_gallery.php");
				}
		?>
	</div>
	<?php 
		if ($current_page_name == 'contact') {
				include("assets/includes/layout/form-side-image.php");
			}
	?>
			

</div>
<footer>
	<div id="copyright">
		Copyright &copy; Khali Haat, <?php echo date("Y"); ?>
	</div>
</footer>
</div>
<?php include("assets/includes/layout/footer.php") ?>