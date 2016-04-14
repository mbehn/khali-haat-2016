$(".gallery-image").click(function() {
	$("#highlighted-gallery-image").attr('src', this.src);
	$("#current-image-index").attr('value', this.id)
	$("#image-gallery-modal").css('z-index', '9999');
	$("#image-gallery-modal").show('medium');
})
$("#close-modal").click(function() {
	$("#image-gallery-modal").hide('medium')
})
function imageGalleryRight() {
	nextImage = $("#current-image-index").val();
	nextImage = Number(nextImage);
	nextImage++;
	var imageArrayLength = document.getElementsByClassName("gallery-image").length;
	if (nextImage > imageArrayLength) {
		nextImage = 1;
	}
	document.getElementById("current-image-index").value = nextImage;
	$("#highlighted-gallery-image").attr('src', 'assets/images/gallery_images/albums/2016/april/sahara_show/' + nextImage + '.jpg');
}

function imageGalleryLeft() {
	previousImage = $("#current-image-index").val();
	previousImage = Number(previousImage);
	previousImage--;
	var imageArrayLength = document.getElementsByClassName("gallery-image").length;
	if (previousImage == 0) {
	previousImage = imageArrayLength;
}
document.getElementById("current-image-index").value = previousImage;			
$("#highlighted-gallery-image").attr('src', 'assets/images/gallery_images/albums/2016/april/sahara_show/' + previousImage + '.jpg', 'medium');
}
document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '37') {
       imageGalleryLeft();
    }
    else if (e.keyCode == '39') {
       imageGalleryRight()
    }
    else if (e.keyCode == '27' || e.keyCode == '13') {
       $("#image-gallery-modal").hide('medium');
    }

}