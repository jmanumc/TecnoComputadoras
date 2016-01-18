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