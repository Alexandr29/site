;(function gallery(){
	var leftArrow = document.getElementById('leftArrow'),
		rightArrow = document.getElementById('rightArrow');
		init = 1;

		leftArrow.addEventListener('click', moveBackward);
		rightArrow.addEventListener('click', moveForward);

		function moveBackward(){
			var image = document.getElementById('image');
			init--;
			if (init == 0) {init = 4}
			image.setAttribute('src','assets/img/'+ init+'.jpg');
		};

		function moveForward(){
			var image = document.getElementById('image');
			init++;
			if (init > 4) {init = 1}
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