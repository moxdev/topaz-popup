jQuery('.close-modal').click(function(){
    jQuery('.home-modal').removeClass('open');
    setTimeout(function(){
      jQuery('.home-modal').css('z-index', -1);
    }, 500);
    return false;
});

// jQuery(document).keyup(function(e) {
//      if (e.keyCode == 27) { // escape key maps to keycode `27`
//         jQuery('.home-modal').removeClass('open');
//         setTimeout(function(){
//           jQuery('.home-modal').css('z-index', -1);
//         }, 500);
//         return false;
//     }
// });

// uncomment to make cookies active
// jQuery(window).load(function() {
//     var visits = jQuery.cookie('visits') || 0;
//     visits++;

//     jQuery.cookie('visits', visits, { expires: 1, path: '/' });

//     if ( jQuery.cookie('visits') > 1 ) {
//         return false;
//     } else {
//         jQuery('.home-modal').css('z-index', 30000);
//         setTimeout(function(){
//           jQuery('.home-modal').addClass('open');
//         }, 1100);
//     }
// });

//comment out when cookies are active
jQuery(window).load(function() {
 jQuery('.home-modal').css('z-index', 9999);
 setTimeout(function(){
   jQuery('.home-modal').addClass('open');
 }, 500);
});

// enque the scripts
//wp_enqueue_script( 'topaz-house-cookies', '/js/modal-window.js', array('topaz-house-cookies'), '', true );
// wp_enqueue_script( 'topaz-house-modal', '/js/modal-window.js', array(), '', true );
//
// wp_register_script( 'atlantic-cruising-yachts-cookies', get_template_directory_uri() . '/js/jquery.cookie.min.js', array('jquery'), '20162309', true );
// wp_enqueue_script( 'atlantic-cruising-yachts', get_template_directory_uri() . '/js/modal-window.js', array('atlantic-cruising-yachts-cookies'), '20162309', true );