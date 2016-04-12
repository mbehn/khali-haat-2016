<?php

 global $db;
 $query = "SELECT * FROM admins";
 $result_set1 = mysqli_query($db, $query);
 confirm_query($result_set1);

 if (isset($_GET["remove"]) && $_GET["remove"] == true && isset($_GET["userid"])) {
 	global $db;
 	$userId = $_GET["userid"];
 	$query = "DELETE FROM `khalihaat`.`admins` WHERE `admins`.`Id` = '$userId'";
 	$result_set2 = mysqli_query($db, $query); 
 	if ($query) {
 		$deleted = true;
 	}
 }
  if (isset($_GET["remove"]) && $_GET["remove"] == true && isset($_GET["userid"])) {
 	global $db;
 	$userId = $_GET["userid"];
 	$query = "SELECT * `khalihaat`.`admins` WHERE `admins`.`Id` = '$userId'";
 	$result_set3 = mysqli_query($db, $query);
 }
?>
<?php if (isset($deleted) && $deleted == true) { ?>
	<h3 style="color:lightgreen;">User ID <?php echo $_GET["userid"]; ?> deleted!</h3>
<?php  } ?>
<?php if (isset($error_user_id) && $error_user_id == true) { ?>
	<h3 style="color:lightred;">User ID <?php echo $_GET["userid"]; ?> does not exist.</h3>
<?php  } ?>
<table>
	<tbody>
		<?php 
			while($user = mysqli_fetch_assoc($result_set1)) { ?>
			<tr
			<?php 
				if (isset($user["Id"]) && isset($_GET["userid"]) && $user["Id"] == $_GET["userid"]) {
					echo " style=\"display:none;\"";
				}
			?>

			>
				<td>
					<?php echo $user["UserName"]; ?>
				</td>
				<td>
					<a href="mailto:<?php echo $user["Email"]; ?>"><?php echo $user["Email"]; ?></a> 
				</td>
				<td>
					<a href="index.php?page=manage_users&update=true">update</a> /
					<a href="index.php?page=manage_users&remove=true&userid=<?php echo $user["Id"]; ?>">delete</a>
				</td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2"><a href="index.php?page=create_new_admin">create a new Admin</a></td>
			</tr>
	</tbody>
</table>