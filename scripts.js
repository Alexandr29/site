;(function gallery(){
	var leftArrow = document.getElementById('leftArrow'),
		rightArrow = document.getElementById('rightArrow');
		init = 1;

		leftArrow.addEventListener('click', moveBackward);
		rightArrow.addEventListener('click', moveForward);

		function moveBackward(){
			alert('left');
		};

		function moveForward(){
			var image = document.getElementById('image');
			init++;
			image.setAttribute('src','assets/img/'+ init+'.jpg');
		};
})();

$('.show_popup').click(function() {
	var popup_id =$('#' + $(this).attr("rel"));
	$(popup_id).show();
	$('.overlay_popup').show();
})	

	$('.overlay_popup').click(function(){
	$('.overlay_popup, .auth').hide();
})