<?php 
 global $db;
 $query = 'SELECT * FROM page';

 $result_set = mysqli_query($db, $query);
 confirm_query($result_set);
?>
<table>
	<thead>
		<th>ID</th>
		<th>Page Name</th>
		<th>Page Title</th>
		<th>Page Link</th>
		<th>Page Description</th>
		<th>Visible In Nav</th>
	</thead>
	<tbody>
		<?php 
			while($page = mysqli_fetch_assoc($result_set)) { ?>
			<tr>
				<td><?php echo $page["Id"]; ?></td>
				<td><?php echo $page["PageName"]; ?></td>
				<td><?php echo $page["PageTitle"]; ?></td>
				<td><a href="index.php?page=<?php echo $page["PageName"] ?>" target="_blank">/khalihaat/index.php?page=<?php echo $page["PageName"] ?></a></td>
				<td><?php echo $page["PageDescription"]; ?></td>
				<td><?php echo $page["PageVisibleInNav"]; ?></td>				
			</tr>

		<?php } ?>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2"><a href="index.php?page=create_page">Create a new Page</a></td>
			</tr>
	</tbody>
</table>