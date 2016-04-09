<?php 
if (isset($_GET["page"])) {
	$current_page_name = $_GET["page"];
} else {
	$current_page_name = null;
}

require_once("assets/includes/dbconnection.php");
require_once("assets/includes/functions.php");


?>
<?php include("assets/includes/layout/assets.php") ?>
<body>

<div id="container">
<?php include("assets/includes/layout/header.php") ?>

<div id="main-content-area">
</div>

</div>

</body>
<?php include("assets/includes/layout/footer.php") ?>