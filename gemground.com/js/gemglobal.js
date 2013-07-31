$(function (){
	var ww = $(window).width(),
	wh = $(window).height(),
	igr_menu = false,
	nav_status = 'max';

	var _hdl_scroll = function (){
		var top = $(window).scrollTop(),
		wh = $(window).height() * 0.6;
		if(top < wh && nav_status == 'min'){
			$('header .navbar').css('overflow','hidden').animate({
				top:0,
				height:60
			});
			$('header .brand').animate({top:0});
			nav_status = 'max';
		}else if(top > wh && nav_status == 'max'){
			$('header .navbar').css('overflow','hidden').animate({
				top:-10,
				height:50
			});
			$('header .brand').animate({top:-47});
			nav_status = 'min';
		}
	},
	_hdl_resize = function (){
		var win = $(window),
		// Update section min height
		sech = win.height() * 0.8 - 60,
		ww = win.width();

		if (sech < 520) {
			sech = 520;
		}
		$('#banner,#service,#pointofview,#clients,#about').height(sech);

		/*if (ww < 785) {
			$('#flow').animate({right:-200});	
		}else{
			$('#flow').animate({right:30});	
		}*/
		$('#flow').css('display', ww < 790 ? 'none' : 'block');
	};
	
	$(window).resize(_hdl_resize);
	$(window).scroll(_hdl_scroll);
	$('header .brand').css('position', 'relative');

	_hdl_resize();
});