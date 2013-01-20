// building select nav for mobile width only
$(function(){
	// building h6 item to toggle the main nav menu
	$('<h6 class="open_nav">Top Nav</h6>').appendTo('#topHeader div.sixteen');

	$('#topHeader h6').click(
		function(){
			$('#topHeader #topNav').slideToggle(150);
		}
	);

});
//end



// building select nav for mobile width only
$(function(){
	
	// building h6 item to toggle the main nav menu
	$('<h6 class="open_nav">Nav Items</h6>').appendTo('#mainNav nav');

	$('#mainNav nav h6').click(
		function(){
			$('#mainNav nav > ul').slideToggle(150);
		}
	);

});
//end


/*============= cart content slide effect =================*/
$(function(){
	$('#mainNav #cart').hover(
		function(){
			$(this).children('div.cart_content').slideDown(160);
		},
		function(){
			$(this).children('div.cart_content').slideUp(160);
		}
	);
});


/*======= end it ===========*/


/*===================== sub menu slide ===============*/
$(function(){
	$('nav ul li').hover(
		function () {
			// hide the css default behavir
			$(this).children('ul.submenu').css('display', 'none');
			//show its submenu
			$(this).children('ul.submenu').slideDown(150);
            $(this).children('ul#subsubmenu').animate({up:'50px'});
            $(this).children('ul#subsubmenu').animate({right:'210px'});
		//	$(this).children('div.dropdown_3columns').slideDown(150);
		},
		function () {
			//hide its submenu
			$(this).children('ul.submenu').slideUp(150);
            $(this).children('ul#subsubmenu').animate({left:'200px'});
            //$(this).children('ul#subsubmenu').slideDown(150);
			$(this).children('div.dropdown_3columns').slideUp(150);
		}
	);
});
/*==================== end it ===================*/


/*========= dropkick plugin for select form =============*/
$(function(){
	$(".default").dropkick();
});
/*======== end it ==========*/


/*============ delete item from dropdown cart ========*/
$(function(){
	$('#mainNav #cart div.cart_content ul li').find('a.remove_item').click(
		function(e){
			e.preventDefault();
			$(this).parents('li')
			.animate({ "opacity": "hide" }, "slow");
		}
	);
});
/*======= end it =========*/

/*============ delete item from shopping cart table (cart.html)  ========*/
$(function(){
	$('table.cart_table tbody td').find('a.delete_item').click(
		function(e){
			e.preventDefault();
			if(confirm("Are you sure?")){
				$(this).parents('tr')
				.animate({ "opacity": "hide" }, "slow");
			}
		}
	);
});
/*======= end it =========*/



// display your twiter feed here
$(function(){
    $(".tweet").tweet({
       username: "seaofclouds",
        join_text: "auto",
        avatar_size: 0,
        count: 1,
        auto_join_text_default: "we said,", 
        auto_join_text_ed: "we",
        auto_join_text_ing: "we were",
        auto_join_text_reply: "we replied to",
        auto_join_text_url: "we were checking out",
        loading_text: "loading tweets..."
    });
      
});//end


/*============== home page accrdain ==============*/
$(function(){
	
	$(".home_news h3").eq(2).addClass("active");
	$(".home_news div").hide();
	$(".home_news div").eq(2).show();
	
	$(".home_news h3").click(function(){
		$(this).next("div").slideToggle("fast").siblings("div:visible").slideUp("fast");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

});
/*=========== end it ===========*/



/*=========== scrollbar ===============*/
$(function(){
	// scroll for the html, body tags
	$('html').niceScroll({
		cursorcolor:"#f9f9f9",
		background: "#d7d7d7",
		cursorborder:"1px solid #d7d7d7",
		cursoropacitymin : 1,
		cursorwidth : 8,
		cursorborderradius :0
	});

	// custom scroll for the tabs in product page
	$('div.product_tabs #tabs div.tabContent').niceScroll({
		cursorcolor:"#f9f9f9",
		background: "#d7d7d7",
		cursorborder:"1px solid #d7d7d7",
		cursoropacitymin : 1,
		cursorwidth : 8,
		cursorborderradius :0
	});

	// custom scroll for the accordian in product page2
	$('.product_info div.acc, .product_review div.acc').niceScroll({
		cursorcolor:"#f9f9f9",
		background: "#d7d7d7",
		cursorborder:"1px solid #d7d7d7",
		cursoropacitymin : 1,
		cursorwidth : 8,
		cursorborderradius :0
	});

});

/*========== end them ==============*/



/*============== product page two accrdain ==============*/
$(function(){
	
	$(".product_info h6").eq(0).addClass("active");
	$(".product_info div.acc").hide();
	$(".product_info div.acc").eq(0).show();
	
	$(".product_info h6").click(function(){
		$(this).next("div.acc").slideToggle("fast").siblings("div:visible").slideUp("fast");
		$(this).toggleClass("active");
		$(this).siblings("h6").removeClass("active");
	});

});
/*=========== end it ===========*/


/*============== product page two accrdain ==============*/
$(function(){
	
	$(".product_review h6").eq(0).addClass("active");
	$(".product_review div.acc").hide();
	$(".product_review div.acc").eq(0).show();
	
	$(".product_review h6").click(function(){
		$(this).next("div.acc").slideToggle("fast").siblings("div:visible").slideUp("fast");
		$(this).toggleClass("active");
		$(this).siblings("h6").removeClass("active");
	});

});
/*=========== end it ===========*/



/*========== slide the related product in the product page ===========*/
$(function(){

	var viewWidth = $(window).width(); 

	if(viewWidth  <= 940 & viewWidth > 768 ) {
		$("div.pro_relates_content").jCarouselLite({
		   btnNext: ".pagers .related_nxt",
		   btnPrev: ".pagers .related_prev",
		   visible: 3
		});

	} else if(viewWidth <= 767 & viewWidth > 479) {
		$("div.pro_relates_content").jCarouselLite({
		   btnNext: ".pagers .related_nxt",
		   btnPrev: ".pagers .related_prev",
		   visible: 2
		});

	} else if(viewWidth <= 479) {
		$("div.pro_relates_content").jCarouselLite({
		   btnNext: ".pagers .related_nxt",
		   btnPrev: ".pagers .related_prev",
		   visible: 1
		});
	} else {
		$("div.pro_relates_content").jCarouselLite({
		   btnNext: ".pagers .related_nxt",
		   btnPrev: ".pagers .related_prev",
		   visible: 4
		});
	}
});
/*=========== end it ===========*/ 


/*================= product images hover effect ===============*/
$(function(){

	$('ul.product_show li').hover(

		function(){
			$(this).children('div.img').children('a').children('img').stop().animate({width:'130%', height:'130%', left:-30, top:-30}, 300);
			$(this).children('div.img').children('div.hover_over').stop().animate({opacity:1},300);
			$(this).find('div.hover_over').children('a.link').stop().animate({'left':'30%'}, 300);
			$(this).find('div.hover_over').children('a.cart').stop().animate({'right':'30%'}, 300);
		},
		function(){
			$(this).children('div.img').children('a').children('img').stop().animate({width:'100%', height:'100%', left:0, top:0}, 300);
			$(this).children('div.img').children('div.hover_over').stop().animate({opacity:0},300);
			$(this).find('div.hover_over').children('a.link').stop().animate({'left':'0'}, 300);
			$(this).find('div.hover_over').children('a.cart').stop().animate({'right':'0'}, 300);
		}

	);

});
/*=========== end it =========*/


/*========== category list =============*/
$(function(){
	$('div.category ul li ul').hide();
	$('div.category ul li:has("ul") a').click(
		function(e){
			e.preventDefault();
			$(this).toggleClass('active');
			$(this).next('ul.nested').slideToggle(400);
		}
	);
});
/*====== end it ======*/


/*======= Testimonial Tab in about page ==========*/
$(function(){
	$('#testimonial #tab_outer ul li a').click(function(e){
		e.preventDefault();
		$('#testimonial #tab_outer div').hide();
		$('#testimonial #tab_outer ul li').removeClass('currentTestimonial');
		$('#testimonial #tab_outer div').filter(this.hash).fadeIn(400);
		$(this).parent('li').addClass('currentTestimonial');
	}).filter(':first').click();
});
/*============== end it =============*/
function widgetClick(){
		var left = $('#sideWidget').css('left');
		if(left <= '-168px'){
			$("#sideWidget").animate({
				left: 10
			});
		}else{
			$("#sideWidget").animate({
				left: '-168px'
			});
		}
	}

/*========== side panel widget =========*/
// open and hide the side panel
$(function(){
	$('#sideWidget a.WidgetLink').click(function(e){
		e.preventDefault();
		var left = $('#sideWidget').css('left');
		if(left <= '-168px'){
			$("#sideWidget").animate({
				left: 10
			});
		}else{
			$("#sideWidget").animate({
				left: '-168px'
			});
		}
	});
});

// change the background body

/*=========== end it ==========*/
function backgroundChange(str) {
		$('body').css({backgroundImage : 'url(/shop/img/'+str+'.png)'});
		//alert(str);
		//document.body.style.background="url ('/cake/img/"+str+".png') repeat";
	}

/*===================== tabs in cart.html page ==================*/
$(function(){
	var tabDivs = $('div.cart_tabs div.cart_tabs_content > div');

	tabDivs.hide().filter(':first').show();
	$('div.cart_tabs ul.cart_tabs_nav li a').on('click', function(e){
		e.preventDefault();
		tabDivs.hide();
		tabDivs.filter(this.hash).fadeIn(300);
		$('div.cart_tabs ul.cart_tabs_nav li a').removeClass('active_tab');
		$(this).addClass('active_tab');

	});
});
/*========= end it =========*/


/*========== slide the brands in the about page ===========*/
$(function(){
	var viewWidth = $(window).width(); 

	if(viewWidth  <= 940 & viewWidth > 768 ) {
		$("div.brands div.brandOuter").jCarouselLite({
		   btnNext: ".pagers .brand_nxt",
		   btnPrev: ".pagers .brand_prev",
		   visible: 4
		});

	} else if(viewWidth <= 767 & viewWidth > 479) {
		$("div.brands div.brandOuter").jCarouselLite({
		   btnNext: ".pagers .brand_nxt",
		   btnPrev: ".pagers .brand_prev",
		   visible: 3
		});

	} else if(viewWidth <= 479) {
		$("div.brands div.brandOuter").jCarouselLite({
		   btnNext: ".pagers .brand_nxt",
		   btnPrev: ".pagers .brand_prev",
		   visible: 2
		});
	} else {
		$("div.brands div.brandOuter").jCarouselLite({
		   btnNext: ".pagers .brand_nxt",
		   btnPrev: ".pagers .brand_prev",
		   visible: 5
		});
	}
});
/*=========== end it ===========*/



/*========= accordain in checkout.html page ============*/
$(function(){
	$('div.checkout_outer div.checkout_content').hide();
	$('div.checkout_outer h2').click(
		function(){
			$(this).next('div.checkout_content').slideToggle(300);
		}
	);
});
/*=========== end it ============*/



/*========= tabs in blog and post and Product page ==========*/
$(function(){
	var tabDivs = $('#tabs #tabContentOuter > div');

	tabDivs.hide().filter(':first').show();
	$('#tabs ul.tabNav li a').on('click', function(e){
		e.preventDefault();
		tabDivs.hide();
		tabDivs.filter(this.hash).fadeIn(300);
		$('#tabs ul.tabNav li a').removeClass('currentTab');
		$(this).addClass('currentTab');

	});
});
/*=========== end them ============*/


/*==========zommed image with etalage plugin in product page=====*/
$(function(){

	var viewWidth = $(window).width(); 

	if(viewWidth  <= 959 & viewWidth > 768 ) {
		$('#etalage').etalage({
			thumb_image_width: 445,
			thumb_image_height: 480,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 267,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			right_to_left: true
		});

	} else if(viewWidth <= 767 & viewWidth > 479) {
		$('#etalage').etalage({
			thumb_image_width: 400,
			thumb_image_height: 360,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 340,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			zoom_element: '#zoom',
			right_to_left: true
		});

	} else if(viewWidth <= 479) {
		$('#etalage').etalage({
			thumb_image_width: 290,
			thumb_image_height: 240,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 340,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 3,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			zoom_element: '#zoom',
			right_to_left: true
		});
	} else {
		$('#etalage').etalage({
			thumb_image_width: 480,
			thumb_image_height: 480,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 340,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 6,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'left',
			autoplay_interval : 3000,
			right_to_left: true
		});
	}

});
/*============ end it ============*/


/*==========zommed image with etalage plugin in product page=====*/
$(function(){

	var viewWidth = $(window).width(); 

	if(viewWidth  <= 959 & viewWidth > 768 ) {
		$('#etalage_style_two').etalage({
			thumb_image_width: 300,
			thumb_image_height: 330,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 220,
			zoom_area_height: 365,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			right_to_left: true
		});

	} else if(viewWidth <= 767 & viewWidth > 479) {
		$('#etalage_style_two').etalage({
			thumb_image_width: 400,
			thumb_image_height: 360,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 340,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			zoom_element: '#zoom',
			right_to_left: true
		});

	} else if(viewWidth <= 479) {
		$('#etalage_style_two').etalage({
			thumb_image_width: 280,
			thumb_image_height: 240,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 340,
			zoom_area_height: 495,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			zoom_element: '#zoom',
			right_to_left: true
		});
	} else {
		$('#etalage_style_two').etalage({
			thumb_image_width: 385,
			thumb_image_height: 370,
			source_image_width: 900,
			source_image_height: 1200,
			zoom_area_width: 280,
			zoom_area_height: 485,
			zoom_area_distance: 20,
			small_thumbs: 4,
			smallthumb_inactive_opacity: 1,
			smallthumbs_position:'bottom',
			autoplay_interval : 3000,
			right_to_left: true
		});
	}

});
/*============ end it ============*/

// Invoke the Fancybox plugin when an image is clicked on the etalage plugin
function etalage_click_callback(image_anchor, instance_id){
	$.fancybox({
		href: image_anchor
	});
}