ww = document.documentElement.clientWidth;
wh = document.documentElement.clientHeight;

jQuery('.home-highlight').each(function(index, value) {
	heading = jQuery(this).find('h2');
	headingClone = heading.clone();
	headingClone.addClass('cloned');
	jQuery(this).prepend(headingClone);
});

if (Modernizr.touch) {
	jQuery('.home-highlight').click(function(e){
		jQuery(this).toggleClass('open');
	});
} else {
	jQuery('.home-highlight').mouseenter(function(){
		jQuery(this).addClass('open');
	})
	.mouseleave(function(){
		jQuery(this).removeClass('open');
	});
}
