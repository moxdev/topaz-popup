x = 0;

function calcHeight() {
	height = jQuery('#site-navigation #primary-menu').outerHeight(true);
}

jQuery('.menu-toggle').click(function(e){
	calcHeight();
	//alert(height);
    if( x == 0 ){
		jQuery('#special, #translate-wrap, .page-template-frontpage #feature-img-wrapper').css({"transform": "translate3d(0px, " + (height-10) + "px, 0px)"});
		jQuery(this).attr('aria-expanded', 'true');
		jQuery('#site-navigation').addClass('toggled');
		jQuery('#page').css('margin-bottom', height + 'px');
		/*jQuery('#site-navigation #primary-menu').css('height', height);*/
        x = 1;
    } else {
		jQuery('#special, #translate-wrap, .page-template-frontpage #feature-img-wrapper').css({"transform": "translate3d(0px, 0px, 0px)"});
		jQuery(this).attr('aria-expanded', 'false');
		jQuery('#site-navigation').removeClass('toggled');
		jQuery('#page').css('margin-bottom', '0px');
		jQuery('#page').css({"transform": "translate3d(0px, 0px, 0px)"});
        x = 0;
		setTimeout(function(){
			jQuery('#site-navigation #primary-menu').css('height', '0px');
		}, 250);
		setTimeout(function(){
			jQuery('#site-navigation #primary-menu').removeAttr('style');
		}, 500);
    }
    e.preventDefault();
});

jQuery(window).on("orientationchange", function(){
	jQuery('#special, #translate-wrap, .page-template-frontpage #feature-img-wrapper').css({"transform": "translate3d(0px, 0px, 0px)"});
	jQuery(this).attr('aria-expanded', 'false');
	jQuery('#site-navigation').removeClass('toggled');
	jQuery('#page').css('margin-bottom', '0px');
	jQuery('#page').css({"transform": "translate3d(0px, 0px, 0px)"});
	x = 0;
	setTimeout(function(){
		jQuery('#site-navigation #primary-menu').css('height', '0px');
	}, 250);
	setTimeout(function(){
		jQuery('#site-navigation #primary-menu').removeAttr('style');
	}, 500);
});