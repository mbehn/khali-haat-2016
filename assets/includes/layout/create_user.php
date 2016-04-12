<?php 
	if (isset($_POST["UserName"])) {
		$UserName = $_POST["UserName"];
	} else {
		$UserName = "";
	}
	if (isset($_POST["Email"])) {
		$Email = addslashes($_POST["Email"]);
	} else {
		$Email = "";
	}
	if (isset($_POST["Password"])) {
		$Password = addslashes($_POST["Password"]);
		$EncryptedPassword = md5($_POST["EncryptedPassword"]);
	} else {
		$Password = "";
	}
	if (isset($_POST["submit"]) && $_POST["page"] = 'create_new_admin') {
		$query = "INSERT INTO `khalihaat`.`admins` 
			(`Id`, `UserName`, `Email`, `Password`, `EncryptedPassword`, `CreateTime`) 
		VALUES 
			(NULL, '$UserName', '$Email', '$Password', '$EncryptedPassword', CURRENT_TIMESTAMP)";
		global $db;
		$result_set = mysqli_query($db, $query);
		confirm_query($result_set);
	}	
?>
<?php 
	if ($_POST["submit"]) { ?>
	<h3><?php echo ["PageName"] ?> successfully created</h3>
<?php } ?>
<?php 
	if ($_POST["submit"]) { ?>
	<h3><?php echo ["UserName"] ?> successfully created</h3>
<?php } ?>
<form action="index.php?page=create_page" method="POST" id="create-page-form">
	<table>
		<tbody>
			<tr>
				<td><label for="UserName">User Name</label></td>
				<td><input type="text" name="UserName" id="UserName" required/></td>
			</tr>
			<tr>
				<td><label for="Email">Email Address</label></td>
				<td><input type="email" name="Email" id="Email" required/></td>
			</tr>
			<tr>
				<td><label for="Password">Page Description</label></td>
				<td><input type="password"  name="Password" id="Password"/></td>
			</tr>
			<tr>
				<td></td>
				<td><button action="submit" name="submit">Submit</button></td>
			</tr>
		</tbody>
	</table>
</form>