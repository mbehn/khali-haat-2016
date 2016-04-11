<?php include("assets/includes/scripts.php") ?>
</body>
</html>
<?php 
if (isset($db)) {
	mysqli_close($db);	
}
?>