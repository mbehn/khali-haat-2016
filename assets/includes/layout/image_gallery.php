<?php 
$i = 1;
$image_array_legth = 13;
?>
<div id="image-gallery-modal" role="dialog">
    <div>
    	<div><span id="close-modal">&times;</a></div>
    	<h4 id="selected-image-header">Image Header</h4>	
      	<img id="highlighted-gallery-image" src="">
    </div>
</div>
<div id="image-gallery-outer-container">
	<div id="image-gallery-container">
		<?php while($i <  $image_array_legth) { ?>
		<div class="image_thumbnail_container" id="image_thumbnail_container_<?php echo $i ?>">
			<div class="inner-image-container">
				<img class="gallery-image" src="assets/images/gallery_images/albums/2016/april/sahara_show/<?php echo $i ?>.jpg">
			</div>			
		</div>
		<?php $i = $i +1;} ?>
	</div>
</div>
<script type="text/javascript">
		$(".gallery-image").click(function() {
			$("#highlighted-gallery-image").attr('src', this.src);
			$("#image-gallery-modal").css('z-index', '999');
			$("#image-gallery-modal").toggle('fade');
		})
		$("#close-modal").click(function() {
			$("#image-gallery-modal").toggle('fade')
		})
</script>
