$(document).ready(function(){
	// variables
	var i = 0;
	var images = ['http://storylens.architects.agency/wp-content/uploads/2016/07/SAFE-AT-HOME-website-still-5.png','http://storylens.architects.agency/wp-content/uploads/2016/07/ALL-IT-TAKES-website-still-3.png','http://storylens.architects.agency/wp-content/uploads/2016/07/PLAYGROUND-website-still-1.png'];
	var image = $('#background-slider');
	var logo = $('.logo-main');
	// preloader
	function preload() {
    $(images).each(function () {
        $('<img />').attr('src',this).appendTo('body').css('display','none');
    });
	}
	// background slider
	image.css('background-image','url(http://storylens.architects.agency/wp-content/uploads/2016/07/100-SECOND-CHANCES-website-still-1.png)');
	setInterval(function(){
		image.fadeOut(1000, function() {
			image.css('background-image', 'url(' + images[i++] +')');			
			image.fadeIn(1000);
		});
		if(i===images.length){
			i=0;
		}
	},10000);
	// change logo color
	logo.addClass('home');
	preload();
	
});