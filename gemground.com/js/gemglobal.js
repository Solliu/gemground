$(function (){
	var ww = $(window).width(),
	wh = $(window).height(),
	nav_style = 'a';

	var _hdl_scroll = function (){
		var top = $(window).scrollTop(),
		wh = $(window).height() * 0.6,
		ns = null;
		if(top < wh){
			// set nav to style A
			ns = 'a';
		}else if(top > wh){
			// set nav to style B
			ns = 'b';
		}
		if ((!!ns) && ns != nav_style) {
			console.log('switch to style-' + ns);
			$('.gemnavbar-' + nav_style).animate({top:-80}, 0.8, null, function (){
				$('.gemnavbar-' + ns).animate({top:0});
			});
			nav_style = ns;
		}
	};
	
	/* handle main nav */
	$('.mainnav .nav a').click(function (){
		var anchor = $(this).attr('href').substr(1),
		pos = ;
		return false;
	});
	$(window).scroll(_hdl_scroll);
});