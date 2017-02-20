$('.owl-active').owlCarousel({
		addClassActive : true,
		autoplay:true,
		autoplayTimeout:2000,
		autoplaySpeed:3000,
		autoplayHoverPause:true,
		loop:true,
		items:6,
		nav:false,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});