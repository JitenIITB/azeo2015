$(function() {
			var u = $('#az');
			var w = $("#text1");
			var w1 = $('#text1a');  
		    var x = $(".header");
		    var y = $(".about");
		    var z = $("#kick");
		    var a = $("#about");
		    var b = $("#cop");
		    var c = $("#sponsors");
		    var d = $("#contct");
		    var l = $(".line");
		    var m = $("#random_0");
		    var n = $("#random_1");
		    var r = $("#arrow");

		    // theme variables

		    var theme = $('#theme');
		    var az9 = $('#a');
		    var az10 = $('#b');
		    var az11 = $('#c');
		    var az12 = $('#d');
		    var az13 = $('#e');
		    var az14 = $('#f');
		    var az15 = $('#g');

		 //    $(document).ready(function(){
			//   	$("body,html").keydown(function(){
			//    	z.css({transform:'rotate('+b+'deg)'});
			//   });
			// });


		    $(window).scroll(function() {
		        var scroll = $(window).scrollTop();
		        var theta = $(window).scrollTop();
		        var a = 115-theta/5;
		        var on = 1-theta/250;
		        var op = -0.1+theta/400;
		          

		        if(scroll>=0 && a>=0){
		        	z.css({transform:'rotate('+a+'deg)'});
		        	// z.css({transform-origin:30% 30%});
		        	// transform-origin: 20% 40%;
		    	}

		    	else{
		    		
		    	}

		    	if(scroll>=80){
		    		w.css({opacity:on});
		    		w1.css({opacity:on});
		    		u.css({opacity:on});
		    		r.css({opacity:on});
		    	}

		    	else{
		    		w.css({opacity:1});
		    		w1.css({opacity:1});
		    		u.css({opacity:1});
		    		r.css({opacity:1});
		    	}

				if (scroll >=220) {
		            x.removeClass("hide").addClass("show");
		             
		        }

		        if(scroll <=200) {
		            // x.animate({top:'-50px'},500);
		            x.removeClass("show").addClass("hide");
		        }	

		        if (scroll >=250) {
		        	
		            y.removeClass("hide");
		            y.css({opacity:op});
		        } 
		        else {
		            y.addClass("hide");
		        }

// For Menu tab's horizontal bar position		       	
		       	if(scroll <=880 ) {
		       		l.css({left:"+0px"});
		       	}

		       	if(scroll >=1050){
		       		l.css({left:"+7.4%"});
		       	}

		       	if(scroll >=1400){
		       		l.css({left:"+16%"});
		       	}

		       	if(scroll >=1800){
		       		l.css({left:"+25%"});
		       	}

		       	if(scroll >=2250){
		       		l.css({left:"+33.5%"});
		       	}

				if(scroll >=1000){
		       		m.animate({left:"+6%"},800);
		       	}

		       	if(scroll >=1050){
		    	    n.animate({left:"-6%"},800);
		       	}
    
    // Theme converges

    			var dis = $(window).scrollTop();
    			var conv9h = -532+dis/2;
    			// for 31 px
    			var conv9v = -500+dis/2;
    			// for 54 px
				var conv10h = 532-dis/2;
				// for -31 px
    			var conv11 = -488+dis/2;
    			// for 63 px
				var conv12 = 490-dis/2;
    			var conv13v = 500-dis/2;
    			// for -54 px


    			if(scroll >= 1040 && conv9h <= 44){
    				az9.css({transform:'translate('+conv9h+'px,'+conv9v+'px)'});
    				// z.css({transform:'rotate('+a+'deg)'});
    				az10.css({transform:'translate('+conv10h+'px,'+conv9v+'px)'});
    				az11.css({transform:'translate('+conv11+'px)'});
    				az12.css({transform:'translate('+conv12+'px)'});
    				az13.css({transform:'translate('+conv9h+'px,'+conv13v+'px)'});
    				az14.css({transform:'translate('+conv10h+'px,'+conv13v+'px)'});
    			}

    			if(scroll >= 1160){
    				az9.css({transform:'translate(41.5px,78.5px)'});
    				az10.css({transform:'translate(-45.5px,78.5px)'});
    				az11.css({transform:'translate(86.5px)'});
    				az12.css({transform:'translate(-86.5px)'});
    				az13.css({transform:'translate(40.5px,-78.5px)'});
    				az14.css({transform:'translate(-44.5px,-81.5px)'});
    				az15.removeClass("hide").addClass("show");
    				az14.addClass("bw");
    				az13.addClass("bw");
    				az12.addClass("bw");
    				az11.addClass("bw");
    				az10.addClass("bw");
    				az9.addClass("bw");

    			}

    			else{
    				az15.removeClass("show").addClass("hide");
    				az14.removeClass("bw");
    				az13.removeClass("bw");
    				az12.removeClass("bw");
    				az11.removeClass("bw");
    				az10.removeClass("bw");
    				az9.removeClass("bw");
    			}
		    });


		    $(window).load(function(){
		    	$("html,body").animate({
		    		scrollTop:'0px'
		    	});

		    	u.delay(700).animate({left:"+2%"},200);
		    	u.removeClass('hide');

		    	// $("html, body").animate({ scrollTop: $('#kick').height()},1000);
		    	w.delay(1000).animate({left:"-10%"},800);
		    	w1.delay(1000).animate({left:"+10%"},800);
		    });
			  	
// For Menu Tabs lines positioning

		    $(document).ready(function(){

		    	$('#scroll').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '450px'
	          				},1500);
	          	return false;
	      		});

			  	$('#home').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '0px'
	          				},1500);
	          	return false;
	      		});

			  	$('#about').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '450px'
	          				},1500);
	          		$('.line').animate({
	          			left:"0px"},1500);
	          	return false;
	      		});

			  	$('#th').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '1220px'
	          				},1500);
	          		$('.line').animate({
	          			left:"+7.4%"},1500);
	          	return false;
	      		});

	      		$('#comp').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '1565px'
	          				},1500);
	          		$('.line').animate({
	          			left:"+16%"},1500);
	          	return false;
	      		});8

	      		$('#sponsors').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '1900px'
	          				},1500);
	          		$('.line').animate({
	          			left:"+25%"},1500);
	          	return false;
	      		});

	      		$('#contct').click(function () {
	          		$("html,body").animate({
	              		scrollTop: '2960px'
	          				},1500);
	          		$('.line').animate({
	          			left:"+33.5%"},1500);
	          	return false;
	      		});

	      		$('#comp9').click(function(){
                	$('#compicon').addClass('hide');
                	$('#compet9').removeClass('hide');

                	
              	});

	      	});
		});


function parallax(){
	//for theme
	var th09=document.getElementById('a');
	var th10=document.getElementById('b');
	var th11=document.getElementById('c');
	var th12=document.getElementById('d');
	var th13=document.getElementById('e');
	var th14=document.getElementById('f');
	var th15=document.getElementById('g');


	
	//for body
	// var land=document.getElementById('kick');
	var img1=document.getElementById('image1');
	var theme=document.getElementById('theme');
	var img2=document.getElementById('image2');
	var comp=document.getElementById('competitions');
	var img3=document.getElementById('image3');
	var cop=document.getElementById('chem-o-philia');
	var spn=document.getElementById('sponsor');
	var contact=document.getElementById('contacts');
	var foot=document.getElementById('footer');

	// land.style.top=-(window.pageYOffset/1)+'px';
	// img1.style.top=-(window.pageYOffset/8)+'px';
	theme.style.top=-(window.pageYOffset/4)+'px';
	comp.style.top=-(window.pageYOffset/1)+'px';
	// cop.style.top=-(window.pageYOffset/1.5)+'px';
	spn.style.top=-(window.pageYOffset/2)+'px';
	img2.style.top=(window.pageYOffset/8)+'px';
	// img3.style.top=(window.pageYOffset/5)+'px';
	foot.style.top=(window.pageYOffset/5)+'px';
	// contact.style.top=-(window.pageYOffset/2)+'px'


	// th10.style.top=-(window.pageYOffset/2)+'px';
	// theme.style.top=-(window.pageYOffset/2)+'px';
	// img2.style.top=(window.pageYOffset*1.25)+'px';

	}		
window.addEventListener("scroll",parallax,false);