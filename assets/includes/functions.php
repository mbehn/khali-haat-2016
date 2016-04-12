<?php 
function confirm_query($result_set) {
		if(!$result_set) {
			die("There was an error with your request please try again.");
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
function getPageInfo($page_name) {
	global $db;
	$query = "SELECT * ";
	$query .= "FROM page ";
	$query .=  "WHERE PageName = '{$page_name}' ";
	$query .= "LIMIT 1 ";
	$page_info = mysqli_query($db, $query);
	confirm_query($page_info);
	$current_page = mysqli_fetch_assoc($page_info);
	return $current_page;
}

function getPageId() {
	global $db;
	$query = "SELECT PageContent ";
	$query .= "FROM page ";
	$query .= "WHERE PageName = '{$page_name}'";


}

?>