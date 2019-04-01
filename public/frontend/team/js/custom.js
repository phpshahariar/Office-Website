/*global jQuery */
/* Contents
// ------------------------------------------------>
1.	MENU
2.  REAM SLIDER
3.  TESTIMONIALS SLIDER
4.  WHAT WE DO SLIDER
5.  PARTNERS SLIDER
6.  BLOG SLIDER
7.  PATNERS SLIDER
8.  FAQ
9.  HEADER SMOOTH SCROLL
10. FAQ ACCORDION
11. COMEING SOON
12. ANIMACTION
*/

 /* ------------------ MENU -----------------*/
 
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});


$(window).on("scroll", function() {
  if ($(document).scrollTop() > 50) {
    $('header').addClass('shrink');
  } else {
    $('header').removeClass('shrink');
  }
});

/* ------------------ SCROLL TO TOP BUTTON -----------------*/

    //Check to see if the window is top if not then display button
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').on("click", function(e) {
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
    });

/* ------------------ REAM SLIDER -----------------*/
var owl = $('#slider');
	owl.owlCarousel({
	loop:true,
	margin: 0,
	autoplayTimeout:5000,
	smartSpeed:450,
	dots:true,
	nav: false,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  992: {
		items: 3
	  },
	  1025: {
		items: 4
	  }
	}
})
	
/* ------------------ TESTIMONIALS SLIDER-----------------*/	

var owl = $('#slider1');
	owl.owlCarousel({
	loop:true,
	margin: 0,
	center: true,
	autoplayTimeout:5000,
	smartSpeed:450,
	dots:true,
	
	nav: true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 3
	  }
	}
})
	
	
/* ------------------ WHAT WE DO SLIDER-----------------*/	

var owl = $('#slider2');
	owl.owlCarousel({
	loop:true,
	margin: 0,
	autoplayTimeout:5000,
	smartSpeed:450,
	dots:true,
	
	nav: true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 1
	  }
	}
})
	
/* ------------------ PARTNERS SLIDER-----------------*/		

var owl = $('#slider3');
	owl.owlCarousel({
	loop:true,
	margin: 0,
	autoplayTimeout:5000,
	smartSpeed:450,
	dots:true,
	
	nav: true,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 1
	  }
	}
})
	
	
/* ------------------ MENU -----------------*/	
jQuery('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "991"
});

$('.info-bar').on('click', function () {
   $('.extra-info').addClass('info-open');
})

$('.close-icon').on('click', function () {
	$('.extra-info').removeClass('info-open');
})

// sticky
var wind = $(window);
var sticky = $('#sticky-header');
wind.on("scroll", function() {
	var scroll = wind.scrollTop();
	if (scroll < 100) {
		sticky.removeClass('sticky');
	} else {
		sticky.addClass('sticky');
	}
});	
	
/* ------------------ FAQ -----------------*/
var wind = $(window);
var sticky = $('#sticky-header');
wind.on("scroll", function() {
	var scroll = wind.scrollTop();
	if (scroll < 100) {
		sticky.removeClass('sticky');
	} else {
		sticky.addClass('sticky');
	}
});	
  

var action = 'click';
var speed = "500";


/*---------------- PROGRESS BAR ------------------*/	
$('.progressbar1').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
});
$('.progressbar2').progressBar({
	shadow : true,
	percentage : false,
	animation : true,
	barColor : "#4a2c8c",
});
$('.progressbarPhp').progressBar({
	shadow : true,
	percentage : false,
	animation : true,
	animateTarget : true,
	barColor : "#4a2c8c",
});
$('.progressbarGit').progressBar({
	shadow : true,
	percentage : false,
	animation : true,
	barColor : "#4a2c8c",
});
$('.progressbar3').progressBar({
	shadow : true,
	percentage : false,
	animation : true,
	animateTarget : true,
	barColor : "#4a2c8c",
});
$(".spinDown").on("click", function(e) {
	var target = $(this).data("target");
	var scrollFix = -80;
	target = "#" + target;
	$("html,body").animate({
		scrollTop : $(target).offset().top + scrollFix
	}, 1000);
	return false;
});

$("a[href^='#']").on("click", function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $("html, body").animate({
            "scrollTop": $target.offset().top - 90
        }, 1000, "swing");
    });
	
	
/*----------------STICKY HEADER ------------------*/		
var wind = $(window);
  var sticky = $('.digifolio_header');
  wind.on("scroll", function() {
	  var scroll = wind.scrollTop();
	  if (scroll < 100) {
		   
      sticky.removeClass('shrink');
	  } 
    else
    {
      sticky.addClass('shrink');
    }
  });	
  
/*----------------SKILL BAR------------------*/	  

  jQuery('.progress-bar1').each(function() {
    jQuery(this).find('.progress-content').animate({
      width:jQuery(this).attr('data-percentage')
    },2000);
    
    jQuery(this).find('.progress-number-mark').animate(
      {left:jQuery(this).attr('data-percentage')},
      {
       duration: 2000,
       step: function(now, fx) {
         var data = Math.round(now);
         jQuery(this).find('.percent').html(data + '');
       }
    });  
  });
  
/* ------------------ FAQ -----------------*/

  // Question handler
  $('li.q').on(action,function () {
    // Get next element
      $(this).next()
        .slideToggle(speed)
        .siblings('li.a')
        .slideUp();
    // Get arrow for active question
    var arrow = $(this).children('.fa');
    // Remove the 'rotate' class for all images except the active.
    $('.fa').not(arrow).removeClass('rotate');
    // Toggle rotate class
    arrow.toggleClass('rotate');
  });
 
 
 

/* ------------------ SCROLL TO TOP BUTTON -----------------*/
    //Check to see if the window is top if not then display button
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').on("click", function(e) {
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
    });
	
/* ------------------ ANIMACTION -----------------*/
  var wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  ).init();