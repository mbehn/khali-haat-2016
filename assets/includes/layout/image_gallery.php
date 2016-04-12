<?php 
$i = 1;
$image_array_legth = 9;
?>
<div id="image-gallery-outer-container">
	<div id="image-gallery-container">
		<?php while($i <  $image_array_legth) { ?>
		<div class="image_thumbnail_container" id="image_thumbnail_container_<?php echo $i ?>">
			<div class="inner-image-container">
				<a href="#"><img src="assets/images/gallery_images/albums/2016/april/sahara_show/<?php echo $i ?>.jpg"></a>
			</div>			
		</div>
		<?php $i = $i +1;} ?>
	</div>
</div>