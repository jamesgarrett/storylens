$(window).load(function(){
	// variables
	var i = 0;
	var images = ['http://storylens.architects.agency/wp-content/uploads/2016/07/bg-2.jpg','http://storylens.architects.agency/wp-content/uploads/2016/07/bg-1.jpg'];
	var image = $('#background-slider');
	var logo = $('.logo-main');
	// preloader
	function preload(arrayOfImages) {
    $(images).each(function () {
        $('<img />').attr('src',this).appendTo('body').css('display','none');
    });
	}
	// background slider
	image.css('background-image','url(http://storylens.architects.agency/wp-content/uploads/2016/07/bg-1.jpg)');
	setInterval(function(){
		image.fadeOut(1000, function() {
			image.css('background-image', 'url(' + images[i++] +')');			
			image.fadeIn(1000);
		});
		if(i==images.length)
		i=0;
	},10000);
	// change logo color
	logo.addClass('home');
	
});