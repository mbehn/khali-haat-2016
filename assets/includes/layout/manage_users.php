<?php 
 global $db;
 $query = "SELECT * FROM admins";
 $result_set = mysqli_query($db, $query);
 confirm_query($result_set);
?>
<table>
	<tbody>
		<?php 
			while($page = mysqli_fetch_assoc($result_set)) { ?>
			<tr>
				<td>
					<?php echo $page["UserName"]; ?>
				</td>
				<td>
					<a href="index.php?page=manage_users&update=true">update</a> /
					<a href="index.php?page=manage_users&remove=true">delete</a>
				</td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="2"><a href="index.php?page=create_new_admin">Create a new Administrator</a></td>
			</tr>
	</tbody>
</table>