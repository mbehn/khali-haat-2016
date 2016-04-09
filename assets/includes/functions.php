<?php 
function confirm_query($result_set) {
		if(!$result_set) {
			die("Database query failed.");
		}
	}
 function getNavItems() {
 	global $db;
 	$query = "SELECT * ";
 	$query .= "FROM page ";
 	$query .=  "WHERE PageVisibleInNav = 1 ";
 	$nav_items = mysqli_query($db, $query);
 	confirm_query($nav_items);
 	return $nav_items;
 }

?>