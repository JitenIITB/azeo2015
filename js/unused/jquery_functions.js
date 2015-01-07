		$(function() {
		    var x = $(".header");
		    $(window).scroll(function() {
		        var scroll = $(window).scrollTop();

				if (scroll >=200) {
		            x.removeClass("hide").addClass("show");
		        } 
		        else {
		            x.removeClass("show").addClass("hide");
		        }		        
		    });
		});

        $(window).scroll(function(){
            $("#a").animate({tranform:'translate(58px,-78px)'},800);
         });

        $(document).ready(function() {

	    // run the fade() function every 2 seconds
	    setInterval(function(){
	        fade();
	    },2000);


	    // toggle between fadeIn and fadeOut with 0.3s fade duration.

	   // $(window).load(function({
	   // setInterval(function(){$(".header").addClass("opacity")},5000);
	//});
