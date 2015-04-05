$(document).ready(function(){

	/*SLIDERS*/

	$('.bxslider').bxSlider({
		auto: true
	});

	$('.slider2').bxSlider({
		auto: false,
		pager: false
	});
	
	$("#brands").flexisel({
		visibleItems: 5,
		animationSpeed: 250
	});

	$("#owl-example").owlCarousel({
		items: 4,
		pagination: false,
		navigation: true,
		navigationText: false
	});







	$('.tog_btn').click(function(){
		if ($(this).hasClass('tgbm')) {
			$(this).parent().find('.box-content').stop().slideUp('slow');
			$(this).removeClass('tgbm').addClass('tgbp');
		}
		else {
			$(this).parent().find('.box-content').stop().slideDown('slow');
			$(this).removeClass('tgbp').addClass('tgbm');
		}
		
	});




	$(".item").find('div').on({
	    mouseenter: function(){
	        $(this).find(".atb ").stop().animate({
	        	top: '-130px'
	        },250);
	    },
	    mouseleave: function(){
	        $(this).find(".atb ").stop().animate({
	        	top: '0px'
	        },250);
	    }
	});







	/*-_-*/
	$(".disable").click(function(){
		event.preventDefault();
	});

	$('.comments-text').click(function(){
		$(this).next(".news-comments").stop().slideToggle("slow");
	});

	$('.popup_link').click(function(){
		$('.popup-box').fadeIn(500);
		$('.overlay').fadeIn(500);
	});

	$('.overlay').click(function(){
		$('.popup-box').fadeOut(500);
		$('.overlay').fadeOut(500);
	})

	/*cat-menu*/
	$(".top-cat li").on({
	    mouseenter: function(){
	        $(this).find(".sub-cat").stop().slideDown("fast");
	    },
	    mouseleave: function(){
	        $(this).find(".sub-cat").stop().slideUp("fast");
	    }
	});

	var topCat = $('.outer-top-cat').offset().top;
	$(window).scroll(function(){
	        if ($(this).scrollTop() >= topCat) {
	            $('.outer-top-cat').addClass('fixed');     
	        }
	        else {
	            $('.outer-top-cat').removeClass('fixed');  
	        }
	});

	/*-----------------------------------user-reg-form-----------------------------------*/
	
	$('#reg-form').on('submit', function(e){

		e.preventDefault();
		var $that = $(this),
		formData = new FormData($that.get(0)); 
		$.ajax({
		  url: '/reg',
		  type: 'post',
		  contentType: false,
		  processData: false, 
		  data: formData,
		  dataType: 'json',
		  success: function(data){
		    if (data.fail) {
			    $.each(data.errors, function(index, error) {
				    alert(error);
				}); 
		    };
		    if (data.success) {
		    	alert(data.success);
		    }
		  }
		});
	});

	/*-----------------------------------user-auth-form-----------------------------------*/

	$('#auth-form').on('submit', function(e){

		e.preventDefault();
		var $that = $(this),
		formData = new FormData($that.get(0)); 
		$.ajax({
		  url: '/auth',
		  type: 'post',
		  contentType: false,
		  processData: false, 
		  data: formData,
		  dataType: 'json',
		  success: function(data){
		    if (data.fail) {
			    $.each(data.errors, function(index, error) {
				    alert(error);
				    if (error = 'User not found') {

				    	$('html,body').animate({
				     		scrollTop: $('#reg-form').offset().top-200
				    	},1000,'easeInOutExpo');

				    };
				}); 
		    };
		    if (data.success) {
		    	location.reload('/');
		    }

		  }
		});

		

	});

	/*-----------------------------------user-add-news-form-----------------------------------*/

	$('#go-add').click(function(){

		var title = $('input[name="anf-title"]').val();
		var text = $('textarea[name="anf-text"]').val();

		$.ajax({

	 		url: "/addnews",
			type: "post",
			data: {title : title, text: text},

			success: function(data) {
				$.each(data.errors, function(index, error) {
			    	alert(error);
				}); 
			}
	 	})

	});

	/*-----------------------------------user-add-comment-form-----------------------------------*/

	$('#add-comment').click(function(){
		var commentText = $('textarea[name="add-new-comment-text"]').val();

		var postId = $(this).parents('.news-item').data('id');

		$.ajax({

	 		url: "/addcomment",
			type: "post",
			data: {commentText: commentText, post_id: postId},

			success: function(data) {
				$.each(data.errors, function(index, error) {
			    	alert(error);
				}); 
			}
	 	})

	});

	/*-----------------------------------user-logout-----------------------------------*/

	$('.logout-link').click(function(){

		$.ajax({

			url: "/logout",
			type: "POST",

			success: function() {
				location.reload('/');
			}

		})

	});

	/*-----------------------------------user-update-account-info-----------------------------------*/

	$('#account-form').on('submit', function(e){

		e.preventDefault();
		var $that = $(this),
		formData = new FormData($that.get(0)); 
		$.ajax({
		  url: '/updateInfo',
		  type: 'post',
		  contentType: false,
		  processData: false, 
		  data: formData,
		  dataType: 'json',
		  success: function(data){
		    if (data.fail) {
		    	$.each(data.errors, function(index, error) {
				    alert(error);
				});
		    }; 
			if (data.success) {
		    	alert(data.success);
		    }
		  }
		});
	});

});