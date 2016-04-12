<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["GalleryName"])) {
		$GalleryName = addslashes($_POST["GalleryName"]);
	} else {
		$GalleryName = "";
	}
	if (isset($_POST["GalleryTitle"])) {
		$GalleryTitle = addslashes($_POST["GalleryTitle"]);
	} else {
		$GalleryTitle = "";
	}
	if (isset($_POST["GalleryDescription"])) {
		$GalleryDescription = addslashes($_POST["GalleryDescription"]);
	} else {
		$GalleryDescription = "";
	}
}	
	if (isset($_POST["submit"])) {
		global $db;
		$query = "INSERT INTO `khalihaat`.`image_gallery` 
		(`Id`, `GalleryName`, `GalleryTitle`, `GalleryDescription`, `CreateTimestamp`) 
		VALUES 
		(NULL, '$GalleryName', '$GalleryTitle', '$GalleryDescription', CURRENT_TIMESTAMP)";
		$result_set = mysqli_query($db, $query);
		confirm_query($result_set);
	}	
	

?>
<form action="index.php?page=create_photo_album" method="POST" id="create-photo-album">
	<table>
		<tbody>
			<tr>
				<td><label for="GalleryName">Gallery Name</label></td>
				<td><input type="text" name="GalleryName" id="GalleryName" required/></td>
			</tr>
			<tr>
				<td><label for="GalleryTitle">Gallery Title</label></td>
				<td><input type="text" name="GalleryTitle" id="GalleryTitle" required/></td>
			</tr>
			<tr>
				<td><label for="GalleryDescription">Gallery Description</label></td>
				<td><textarea type="email" name="GalleryDescription" id="GalleryDescription" required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><button action="submit" name="submit" class="btn btn-default">Create</button></td>
			</tr>
		</tbody>
	</table>
</form>