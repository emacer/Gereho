
$(function(){
	$(".jimgMenu ul").kwicks({max: 310, duration: 300, easing: "easeOutQuad", complete: "callback"});

	$(document).on('click', 'a.thumbnail', function(e) {
        e.preventDefault();
        var $thumbnail = $(this);
        console.log($thumbnail.data());
        $('#image-gallery-title').text($thumbnail.data('title'));
        $('#image-gallery-image').attr('src', $thumbnail.data('image'));
        $('#image-gallery').modal("show");
    });
});