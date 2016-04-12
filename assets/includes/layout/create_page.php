<?php 
	if (isset($_POST["PageName"])) {
		$PageName = $_POST["PageName"];
	} else {
		$PageName = "";
	}
	if (isset($_POST["PageTitle"])) {
		$PageTitle = addslashes($_POST["PageTitle"]);
	} else {
		$PageTitle = "";
	}
	if (isset($_POST["PageDescription"])) {
		$PageDescription = addslashes($_POST["PageDescription"]);
	} else {
		$PageDescription = "";
	}
	if (isset($_POST["PageContent"])) {
		$PageContent = addslashes($_POST["PageContent"]);
	} else {
		$PageContent = "";
	}
	if (isset($_POST["PageMetaTags"])) {
		$PageMetaTags = addslashes($_POST["PageMetaTags"]);
	} else {
		$PageMetaTags = "";
	}
	if (isset($_POST["PageMetaDescription"])) {
		$PageMetaDescription = addslashes($_POST["PageMetaDescription"]);
	} else {
		$PageMetaDescription = "";
	}
	if (isset($_POST["PageVisibleInNav"])) {
		$PageVisibleInNav = $_POST["PageVisibleInNav"];
	} else {
		$PageVisibleInNav = "";
	}
	if (isset($_POST["submit"])) {
		$query = "INSERT INTO `khalihaat`.`page` 
			(`Id`, `PageName`, `PageTitle`, `PageDescription`, `PageVisibleInNav`, `PageContent`, `PageMetaTags`, `PageMetaDescription`) 
		VALUES 
			(NULL, '$PageName', '$PageTitle', '$PageDescription', '$PageVisibleInNav', '$PageContent', '$PageMetaTags', '$PageMetaDescription')";
		global $db;
		$result_set = mysqli_query($db, $query);
		confirm_query($result_set);

	}	
?>
<?php 
	if (isset($_POST["submit"])) { ?>
	<h3 style="color:lightgreen"><?php echo $_POST["PageTitle"] ?> page successfully created!</h3>
<?php } ?>
<form action="index.php?page=create_page" method="POST" id="create-page-form">
	<table>
		<tbody>
			<tr>
				<td><label for="PageName">Page Name</label></td>
				<td><input type="text" name="PageName" id="PageName" required/></td>
			</tr>
			<tr>
				<td><label for="PageTitle">Page Title</label></td>
				<td><input type="text" name="PageTitle" id="PageTitle" required/></td>
			</tr>
			<tr>
				<td><label for="PageDescription">Page Description</label></td>
				<td><textarea name="PageDescription" id="PageDescription" required></textarea></td>
			</tr>
			<tr>
				<td><label for="PageContent">Page Content</label></td>
				<td><textarea rows="4" name="PageContent" id="PageContent" required></textarea></td>
			</tr>
			<tr>
				<td><label for="PageMetaTags">Page Meta Tags</label></td>
				<td><textarea rows="4" name="PageMetaTags" id="PageMetaTags" required></textarea></td>
			</tr>
			<tr>
				<td><label for="PageMetaDescription">Page Meta Description</label></td>
				<td><textarea rows="4" name="PageMetaTDescription" id="PageMetaDescription" required></textarea></td>
			</tr>
			<tr>
				<td><label for="PageVisibleInNav">Page visible in nav</label></td>
				<td>
					<input type="radio" name="PageVisibleInNav" value="1" > Yes
					<input type="radio" name="PageVisibleInNav" value="0" > No
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button action="submit" name="submit">Submit</button></td>
			</tr>
		</tbody>
	</table>
</form>