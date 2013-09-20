$(window).load(function() {
	$('.loader').fadeOut(500,function() {
		$('.stage').animate({
			opacity: '1'
		},500);
	});
})
$(document).ready(function(){
	


	var chrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());
	if(chrome){
		$.each($("section"), function(e,v) {
			$(v).attr('data-stellar-background-ratio' ,'0');
		})
	}
	var firefox = /firefox/.test(navigator.userAgent.toLowerCase());
	
	if (firefox) {
		alert('little buggy in firefox. fix them soon (:');
	}

    $(window).stellar();

   var width = $(window).width();
   var height = $(window).height();
   $('.bg-1').css('height', height);
   $('section').css('height', height);
   var padding = (height - 400) / 2;
   $('.portofolio-single').css('padding', padding+'px 0');
   $('.portofolio-single').css('width', width);
   $('.project-detail').css('width', width); 

   $('.front-big').css('padding', padding+'px 0');


	// Define base height to project-single
	$('.portofolio-single').each(function() {
		$(this).css('min-height', height);
	});
   // Project Detail Events
   $('a#view-proj').click(function(e) {
   	e.preventDefault();
   	var target = $(this).attr('data-section'),
   			desc = $('.project-row[data-title="'+target+'"]').find('.project-desc'),
   			mockup = $('.project-row[data-title="'+target+'"]').find('.project-macbook'),
   			detail = $('.project-row[data-title="'+target+'"]').find('.project-detail');

   	$(desc).addClass('fadeOutLeft');
	   $(mockup).addClass('fadeOutRight');
   	setTimeout(function() { 	
	   	$('.project-row[data-title="'+target+'"]').transit({
	   		left: '-' + width + 'px'
	   	},100,'snap',function() {
	   		$(desc).addClass('hide').removeClass('fadeOutLeft');
	   		$(mockup).addClass('hide').removeClass('fadeOutRight');
	   		$(detail).removeClass('hide');
	   	});
	   },800);
   });

   $('a#back').click(function(e) {
   	e.preventDefault();
   	var target = $(this).attr('data-section'),
   			desc = $('.project-row[data-title="'+target+'"]').find('.project-desc'),
   			mockup = $('.project-row[data-title="'+target+'"]').find('.project-macbook'),
   			detail = $('.project-row[data-title="'+target+'"]').find('.project-detail');
   	
   	$(detail).addClass('fadeOutUp');
   	setTimeout(function() {
   		$('.project-row[data-title="'+target+'"]').transit({
	   		left: '0'
	   	},100,'snap',function() {
	   		$(detail).removeClass('fadeOutUp').addClass('hide');
	   		$(desc).removeClass('hide');
	   		$(mockup).removeClass('hide');
	   	});
   	},800)
   	

	   	
   });
    
}); 

$(function() {
	$('body').click(function() {
		$('ul.submenu').slideUp(200);
	})

	$('li.mainmenu').click(function() {
		if ($('ul.submenu', this).is(":hidden")) {
			$('ul.submenu').slideUp(200);
		}
		
		$("ul",this).slideToggle(200);
		return false;
	});

	$('.submenu > li a').click(function() {
		$(window).scrollTo($('section[data-target="'+$(this).attr('id')+'"]'),400);
	})
});


$(window).scroll(function() {
	$('.portofolio-single:above-the-top').each(function() {
		$(this).find('.project-macbook').addClass('hide');
		$(this).find('.project-desc').addClass('hide');
	})
	$(".portofolio-single:left-of-screen").each(function() {
		$(this).find('.project-macbook').addClass('hide');
		$(this).find('.project-desc').addClass('hide');
	})
 	$(".portofolio-single:right-of-screen").each(function() {
		$(this).find('.project-macbook').addClass('hide');
		$(this).find('.project-desc').addClass('hide');
	})
	$('.portofolio-single:below-the-fold').each(function() {
		$(this).find('.project-macbook').addClass('hide');
		$(this).find('.project-desc').addClass('hide');
	})
	$('.portofolio-single:in-viewport').each(function() {
		$(this).find('.project-macbook').removeClass('hide');
		$(this).find('.project-desc').removeClass('hide');
	})
});
