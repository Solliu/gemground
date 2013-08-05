$(function (){
	var ww = $(window).width(),
	wh = $(window).height(),
	nav_style = 'a',
	btn_back2top = $('#flow #backtotop').css('display', 'none');
	btn_qq = $('#flow #qq').css('display', 'none');

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
		of = $(window).width() - 200,
		np = top+$(window).height()-140;
		np = np > p ? p : np;
		flow.offset({top:np,left:of.left});
		if (top > (winh * 1.2)) {
			if (btn_back2top.css('display') == 'none') {
				btn_back2top.css('display', 'block');
			}
		}else{
			if (btn_back2top.css('display') == 'block') {
				btn_back2top.css('display', 'none');
			}
		}
		if (top > (winh * 0.5)) {
			if (btn_qq.css('display') == 'none') {
				btn_qq.css('display', 'block');
			}
		}else{
			if (btn_qq.css('display') == 'block') {
				btn_qq.css('display', 'none');
			}
		}
	};
	
	/* handle main nav */
	var prevhash = null;
	$('.mainnav .nav a, #flow .backtotop').click(function (){
		if (!$('body').hasClass('home')) return true;
		
		var anchor = $(this).attr('href');
		anchor = anchor.substr(anchor.lastIndexOf('#')+1);
		$.scrollTo('a[name='+ anchor +']', 500, null);
		return false;
	});

	if(document.location.hash.length > 1){
		$.scrollTo('a[name='+ document.location.hash.substr(1) +']', 800);
	}

	$(window).scroll(_hdl_scroll);
});