$(document).ready(function () {
	
	if($('main.main > div').hasClass('blank')) {
		if(!$('main.main > div.blank').hasClass('with-header')) {
			$('header.main .jumbotron.custimize').css('display', 'none');
		}
		if(!$('main.main > div.blank').hasClass('with-sidebar')) {
			$('aside.main').css('display', 'none');
		}
	}

});
$(document).ready(function () {

	// Off-Canvas
	$('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active');
	});

});
//# sourceMappingURL=blog.js.map
