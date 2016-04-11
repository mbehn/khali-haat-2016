<?php 
if (isset($_POST["username"])) {
	$username = $_POST["username"];
}
else {
	$username = "";
}

if (isset($_POST["password"])) {
	$password = $_POST["password"];
}
else {
	$password = "";
}
	if ($username != "" && $password != "") { ?> 
		You've logged in
	<?php } else { 
			$_POST["username"] = "";
		?>
		Please try again
	<?php } ?>
<form id="login-form" action="index.php?page=login" method="POST">
	<table>
		<tbody>
			<tr>
				<td><label for="username">username</label></td>
				<td id="username"><input type="text" id="username" name="username" value="username"></td>
			</tr>
			<tr>
				<td><label for="username">password</label></td>
				<td id="password"><input type="password" id="password" name="password" value="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="form-control btn btn-primary" action="submit" name="submit" value="submit">login</button></td>
			</tr>
			<tr>
				<td colspan="2">Click <a href="index.php?page=create_account">here</a> to create an account</td>
			</tr>
		</tbody>
	</table>
</form>