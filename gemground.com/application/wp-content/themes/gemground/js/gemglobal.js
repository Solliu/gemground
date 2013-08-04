$(function (){
	var ww = $(window).width(),
	wh = $(window).height(),
	nav_style = 'a',
	btn_back2top = $('#flow .backtotop').css('display', 'none');

	var _hdl_scroll = function (){
		var top = $(window).scrollTop(),
		winh = $(window).height(),
		wh = winh * 0.6,
		ns = null;
		if(top < wh){
			// set nav to style A
			ns = 'a';
		}else if(top > wh){
			// set nav to style B
			ns = 'b';
		}
		if ((!!ns) && ns != nav_style) {
			$('.gemnavbar-' + nav_style).animate({top:-80}, 0.8, null, function (){
				$('.gemnavbar-' + ns).animate({top:0});
			});
			nav_style = ns;
		}

		// adjust 
		var p=$('footer').offset().top - 140,
		flow = $('#flow'),
		of = flow.offset(),
		np = top+$(window).height()-140;
		np = np > p ? p : np;
		flow.offset({top:np,left:of.left});
		if (top > (winh * 1.4)) {
			if (btn_back2top.css('display') == 'none') {
				btn_back2top.css('display', 'inline');
			}
		}else{
			if (btn_back2top.css('display') == 'inline') {
				btn_back2top.css('display', 'none');
			}
		}
	};
	
	/* handle main nav */
	$('.mainnav .nav a, #flow .backtotop').click(function (){
		var anchor = $(this).attr('href');
		$.scrollTo('a[name='+anchor.substr(anchor.lastIndexOf('#')+1)+']', 500, null);
		return false;
	});


	$(window).scroll(_hdl_scroll);
});