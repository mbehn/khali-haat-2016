<?php 
if (isset($_GET["page"])) {
	$current_page_name = $_GET["page"];
} else {
	$current_page_name = "";
}
if (isset($_POST["form-email-address"])) {
	$email_address = $_POST["form-email-address"];
	$encrypted_email_address = md5($email_address);
	$display_name = $_POST["form-email-address"];
}
else {
	$email_address = null;
}
if (isset($_POST["name"])) {
	$name = $_POST["name"];
	$display_name = $_POST["name"];
} else {
	$name = null;
}
if (isset($_POST["message"])) {
	$message = $_POST["message"];
}
else {
	$message = "";
}
if (isset($_POST["newsletter"])) {
	$newsletter = $_POST["newsletter"];
}
else {
	$newsletter = "";
}
require_once("assets/includes/dbconnection.php");
require_once("assets/includes/functions.php");
?>

<?php 
	if (isset($_POST["submit"]) && $_POST["submit"] == "submit") {
		global $db;
		$date = DATE_ATOM;
		$query = "INSERT INTO `khalihaat`.
		`form_submissions` (`Id`, `Name`, `Email`, `EncryptedEmail`, `Message`, `Newsletter`) 
		VALUES (NULL, '$name', '$email_address', '$encrypted_email_address', '$message', '$newsletter')";
		mysqli_query($db, $query);
	}

?>
<?php include("assets/includes/layout/assets.php") ?>


<?php include_once("assets/includes/analyticstracking.php") ?>

<div id="container">
<?php include("assets/includes/layout/header.php") ?>

<div id="main-content-area">
	<div id="content">
	<?php 
		if (!isset($_POST["form-email-address"])) {
	?>
	<h1>Please <a href="index.php?page=contact">go back</a> and fill our our form!</h1>	
	<?php } ?>	
	<?php 
		if (isset($_POST["form-email-address"])) {
	?>
	<h1>Thanks for reaching out <?php echo $display_name; ?>!</h1>	
	<?php } ?>
		<?php 
			if (isset($current_page["PageTitle"])) { ?>
				<h1><?php echo $current_page["PageTitle"]; ?></h1>
		<?php } ?>
		<?php 
			if (isset($current_page["PageContent"])) { ?>
				<?php echo $current_page["PageContent"]; ?>
		<?php } ?>
		<?php 
			if ($current_page_name == 'contact') {
				include("assets/includes/layout/contact-form.php");
			}
		?>
	</div>	
</div>
<footer>
	<div id="copyright">
		Copyright &copy; Khali Haat, <?php echo date("Y"); ?>
	</div>
</footer>
</div>
<?php include("assets/includes/layout/footer.php") ?>