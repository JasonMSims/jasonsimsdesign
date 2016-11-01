$(document).ready(function(){
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			|| location.hostname == this.hostname) {
	
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 $('html,body').animate({
					 scrollTop: target.offset().top
				}, 800);
				return false;
			}
		}
	});
	$('.contact-form').on('submit', 'form', function(event){
		event.preventDefault();
		var data = new Object;
		data.sent = true;
		data.name = $('#name').val();
		data.email = $('#email').val();
		data.subject = $('#subject').val();
		data.message = $('#message').val();
		
		$.ajax({
			type: 'POST',
			url: 'email.php',
			data: data,
			dataType: 'JSON',
		})
		.done(function(data){
			if(data.class == 'success') $('#contact-form input:not(:submit), #contact-form textarea').val('');
			$('<p class="' + data.class + '">' + data.message + '</p>').insertBefore('#contact-form');
		})
		.fail(function(data){
			console.log('FAILURE!');
		})
		.always(function(data){
			$('#contact-form input, #contact-form textarea').prop('disabled', false);
		});
		
		$('#contact-form input, #contact-form textarea').prop('disabled', true);
		
	});
	
	var colorThemeArray = {'cmyk' : {},'rgb' : {}};
	colorThemeArray['cmyk']['colors']	= ['cyan', 'magenta', 'black', 'yellow'];
	colorThemeArray['cmyk']['ribbon']	= 'ribbon-cmyk';
	colorThemeArray['rgb']['colors']	= ['red', 'green', 'blue'];
	colorThemeArray['rgb']['ribbon']	= 'ribbon-rgb';
	
	randomColorTheme = function(){
		//---Establish RGB or CMYK---//
		themeArray = Array('cmyk'/*, 'rgb'*/);
		randomNum = Math.floor(Math.random() * ((themeArray.length - 1) - 0 + 1)) + 0;
		randomTheme = themeArray[randomNum];
		//---Establish Dominant Color---//
		colorArray = colorThemeArray[randomTheme]['colors'];
		randomNum = Math.floor(Math.random() * ((colorArray.length - 1) - 0 + 1)) + 0;
		randomColor = colorArray[randomNum];
		//---Inject Dominant Color---//
		$('#work').removeClass().addClass(randomColor + '-5');
		$('#work li').each(function(i){
			$(this).removeClass().addClass(randomColor + '-' + (i + 2));
		});
		$('.ribbon').removeClass('ribbon-cmyk ribbon-rgb').addClass(colorThemeArray[randomTheme]['ribbon']);
		/*if(randomTheme == 'rgb'){
			$('.header, #footer').addClass(randomColor + '-4');
			$('.logo').addClass('logo-rgb').html('<img src="lib/css/image/web-logo-rgb.png" />');
		};*/
	};
	
	/*randomProfilePic = function(){
		picArray = Array('profile_1.jpg', 'profile_2.jpg', 'profile_4.jpg');
		randomPic = Math.floor(Math.random() * ((picArray.length - 1) - 0 + 1)) + 0;
		randomPic = picArray[randomPic];
		
		$('.profile figure').html('<img class="round" src="lib/css/image/profile/' + randomPic + '">');
	};*/
	
	randomColorTheme();
	//randomProfilePic();
	
});	