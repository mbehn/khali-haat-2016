	<header>
		<div id="album-image-container">
			<a href="index.php?page=home"><img id="album-cover-image" src="assets/images/album.jpg"></a>
		</div>		
		<div id="nav-container">
			<nav>
				<ul>
					<?php 
						$navItems = getNavItems();
						while($navItem = mysqli_fetch_assoc($navItems)) { ?>
							<li>
								<a href="index.php?page=<?php echo $navItem["PageName"]; ?>" id="<?php echo $navItem["PageName"] ?>"
								<?php 
								if ($navItem["PageName"] == $current_page_name) {
									echo " class=\"selected\"";
								};
								?>	

								>
									<?php echo $navItem["PageTitle"] ?>
								</a>
							</li>
						<?php } ?>
				</ul>
			
			</nav>
		</div>
	</header>