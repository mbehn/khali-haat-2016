<?php 
$i = 1;
$image_array_legth = 13;
?>
<div id="image-gallery-modal" class="modal" role="dialog" value="">
<input type="hidden" id="current-image-index" />
    <div><span id="close-modal">&times;</span></div>
    <h4 id="selected-image-header">Sahara Lounge April 2016</h4>
    <div id="modal-image-container">
    	<div id="image-gallery-left" class="gallery-nav" onclick="imageGalleryLeft()"><</div>
    		<img id="highlighted-gallery-image" src="" value="">
    	<div id="image-gallery-right" class="gallery-nav" onclick="imageGalleryRight()">></div>	
    </div>
</div>
<div id="image-gallery-outer-container">
	<div id="image-gallery-container">
		<?php while($i <  $image_array_legth) { ?>
		<div class="image_thumbnail_container" id="image_thumbnail_container_<?php echo $i ?>">
			<div class="inner-image-container">				
				<img class="gallery-image" id="<?php echo $i ?>" src="assets/images/gallery_images/albums/2016/april/sahara_show/<?php echo $i ?>.jpg">							
			</div>			
		</div>
		<?php $i = $i +1;} ?>
	</div>
</div>
<script type="text/javascript" src="assets/scripts/image-gallery.js"></script>
