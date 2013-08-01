$(function (){
	var ww = $(window).width(),
	wh = $(window).height(),
	igr_menu = false,
	nav_status = 'max';

	var _hdl_scroll = function (){
		var top = $(window).scrollTop(),
		wh = $(window).height() * 0.6;
		if(top < wh && nav_status == 'min'){
			// set nav to max view
			$('header #mainnav').css('position','relative').animate({
				top:0,
				height:60
			});
			$('#gemlogo').removeClass('smalllogo').addClass('biglogo');
			nav_status = 'max';
		}else if(top > wh && nav_status == 'max'){
			$('header #mainnav').css('position','relative').animate({
				top:-10,
				height:50
			});
			var logo = $('header .brand');
			$('#gemlogo').removeClass('biglogo').addClass('smalllogo');
			nav_status = 'min';
		}
	}/*,
		
	_hdl_resize = function (){
		var win = $(window),
		// Update section min height
		sech = win.height() * 0.8 - 60,
		ww = win.width();



		if (ww < 980) {
			$('#banner,#service,#pointofview,#clients,#about').height('auto');
		}else {
			if (sech < 500) {
				sech = 500;
			}else if (sech > 720) {
				sech = 720;
			}
			$('#banner,#service,#pointofview,#clients,#about').height(sech);
		}
		
	}*/;
	
	// $(window).resize(_hdl_resize);
	$(window).scroll(_hdl_scroll);

	// _hdl_resize();
});