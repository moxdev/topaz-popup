//  modal.js

// Ability to close the modal
jQuery('.close-modal').click(function(){
    jQuery('.home-modal').removeClass('open');
    setTimeout(function(){
      jQuery('.home-modal').css('z-index', -1);
    }, 500);
    return false;
});

// Ability to use esc to close the modal
jQuery(document).keyup(function(e) {
    if (e.keyCode == 27) { // escape key maps to keycode `27`
        jQuery('.home-modal').removeClass('open');
        setTimeout(function(){
          jQuery('.home-modal').css('z-index', -1);
        }, 500);
        return false;
    }
});

// Uncomment to make cookies active for modal
jQuery(window).load(function() {
    jQuery('.home-modal').css('z-index', 30000);

    setTimeout(function(){
        var visits = jQuery.cookie('visits') || 0;
        visits++;

        jQuery.cookie('visits', visits, { expires: 1, path: '/' });

        if ( jQuery.cookie('visits') > 1 ) {
            return false;
        } else {
            jQuery('.home-modal').addClass('open');

            jQuery("#tour-form").submit(function(event) {

                var form = jQuery("#tour-form").serialize();

                jQuery.ajax({
                    type: 'POST',
                    url: 'http://localhost:8888/topaz/wp-content/themes/topaz-popup/form.php',
                    data: form,
                    success: function() {
                       jQuery('.modal-footer').remove();
                       jQuery('.modal-header').html("<div id='submit-message-container'></div>");
                       jQuery('#submit-message-container').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 206.75 89.21"><defs><clipPath id="clip-path" transform="translate(0 0)"><rect width="206.75" height="89.21" style="fill:none"/></clipPath></defs><title>Topaz House</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g><path d="M8.33,85.39c0,1.49,0,2.52,1.39,3.33v.08H4.43v-.08c1.34-.5,1.18-2.41,1.18-3.59V73.44H3.26a4.69,4.69,0,0,0-3.18,1H0l.93-3.12H1a4.13,4.13,0,0,0,1,.19H12.66a3,3,0,0,0,1.23-.19H14l-.86,3.12H13c-.35-.92-1.41-1-2.3-1H8.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M16.93,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S27.93,73,23.71,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22s-9.74-3.72-9.74-9.09c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M41.78,71.55c3.47,0,6.11,1.65,6.11,4.59S45,81.06,42,81.06a4.54,4.54,0,0,1-1.95-.36c2.3-.13,4.78-1.52,4.78-4,0-2.31-1.66-3.22-3.79-3.22a11.09,11.09,0,0,0-1.87.16V85.41c0,1.47,0,2.51,1.39,3.3v.08H35.27v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.18.16-3.09-1.17-3.62v-.08Z" transform="translate(0 0)" style="fill:#fff"/><path d="M55.77,73.78l-2.64,6.6h5.26Zm-3.34,8.54L51,86c-.56,1.47-.75,2.23.53,2.7v.08H46.67v-.08c1.55-.76,2-2.23,2.59-3.72l4.46-10.93c.37-.94.88-2-.4-2.44v-.08h4.22L63.09,85c.61,1.49,1.09,3,2.62,3.72v.08H60.23v-.08c1.31-.58,1.09-.86.37-2.7l-1.44-3.69Z" transform="translate(0 0)" style="fill:#fff"/><path d="M66,88.79,75.67,73.7l-4.54-.26a5.8,5.8,0,0,0-4,1.13H67l1.36-3H80.2l-9.61,15,5.61.31a9.21,9.21,0,0,0,5.29-1.44h.08l-1.49,3.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M126,80.38v4.74c0,1.18-.16,3.09,1.18,3.59v.08h-5.07v-.08c1.33-.5,1.17-2.41,1.17-3.59V75.22c0-1.18.19-3.09-1.17-3.59v-.08h5.07v.08c-1.34.5-1.18,2.41-1.18,3.62V78.5h9.64V75.25c0-1.21.19-3.12-1.18-3.62v-.08h5.1v.08c-1.36.5-1.2,2.41-1.2,3.59v9.91c0,1.18-.16,3.09,1.2,3.59v.08h-5.1v-.08c1.36-.5,1.18-2.41,1.18-3.59V80.38Z" transform="translate(0 0)" style="fill:#fff"/><path d="M144.09,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S155.09,73,150.87,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22S141,85.49,141,80.12c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M174.5,87.06a6.7,6.7,0,0,1-5.23,2.15,6.63,6.63,0,0,1-4.83-1.83c-1.42-1.52-1.36-3.28-1.36-5.16v-7c0-1.18.19-3.09-1.18-3.59v-.08H167v.08c-1.34.5-1.18,2.41-1.18,3.59v7c0,3.48,1.49,5.11,4.25,5.11a4.75,4.75,0,0,0,3.9-1.83,3.4,3.4,0,0,0,.56-2.38V75.22c0-1.18.16-3.09-1.17-3.59v-.08h5.07l0,.08c-1.36.5-1.2,2.41-1.2,3.62v9.88c0,1.18-.16,3.09,1.2,3.59v.08H174.5Z" transform="translate(0 0)" style="fill:#fff"/><path d="M190.84,74.67A6.14,6.14,0,0,0,186.65,73c-1.52,0-3.44.58-3.44,2.39,0,3.59,9.18,3.54,9.18,8.38,0,2.81-3,5.42-7.15,5.42a14,14,0,0,1-4.78-.79l-.77-3.28a9.34,9.34,0,0,0,5.85,2.17c1.52,0,3.82-.89,3.82-2.73,0-4.09-9.18-3.35-9.18-8.91,0-3.3,3.44-4.56,6.7-4.56a13.65,13.65,0,0,1,4,.58Z" transform="translate(0 0)" style="fill:#fff"/><path d="M198.34,86.59l3.39.31a6.73,6.73,0,0,0,4.94-1.55h.08l-1.2,3.43H194.42v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.21.16-3.12-1.2-3.62v-.08H203a2.79,2.79,0,0,0,1.25-.13h.08v3.06h-.08a3.78,3.78,0,0,0-3.15-1,15.37,15.37,0,0,0-2.72.18V78.5h3.18a2.78,2.78,0,0,0,1.17-.16h.08v2.78h-.08c-.43-.76-1.55-.73-2.38-.73h-2Z" transform="translate(0 0)" style="fill:#fff"/></g><polygon points="101.41 0 33.63 66.53 33.65 66.55 75.94 66.55 75.92 66.53 101.41 41.5 126.91 66.53 126.89 66.55 169.18 66.55 169.2 66.53 101.41 0" style="fill:#9496a1"/><path d="M87.6,66.53,101.41,53l13.81,13.56L101.41,80.08Zm13.82-18.3L82.76,66.53l18.65,18.3,18.65-18.3Z" transform="translate(0 0)" style="fill:#9496a1"/><polygon points="101.41 76.64 91.11 66.53 101.41 56.41 111.72 66.53 101.41 76.64" style="fill:#9496a1"/></g></g></svg>').append("<h3>Your Request Was Received!</h3>").append("<img src='/imgs/checkmark.svg' />").append("<p>Someone from our leasing office will contact you shortly.</p>").hide().fadeIn(1000);
                    },
                    error: function(data){
                        alert("There was an error submitting your request, please try again");
                    }
                })
                event.preventDefault();
            });
        }
    }, 60000);
});

//comment out when cookies are active
// jQuery(window).load(function() {
//     jQuery('.home-modal').css('z-index', 30000);

//     setTimeout(function(){
//         jQuery('.home-modal').addClass('open');
//     }, 500); // 60000 ( 1 minute )

//     jQuery("#tour-form").submit(function(e) {

//         var form = jQuery("#tour-form").serialize();

//         jQuery.ajax({
//             type: 'POST',
//             url: 'http://localhost:3000/topaz/wp-content/themes/topaz-popup/form.php',
//             data: form,
//             success: function() {
//                jQuery('.modal-footer').remove();
//                jQuery('.modal-header').html("<div id='submit-message-container'></div>");
//                jQuery('#submit-message-container').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 206.75 89.21"><defs><clipPath id="clip-path" transform="translate(0 0)"><rect width="206.75" height="89.21" style="fill:none"/></clipPath></defs><title>Topaz House</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g><path d="M8.33,85.39c0,1.49,0,2.52,1.39,3.33v.08H4.43v-.08c1.34-.5,1.18-2.41,1.18-3.59V73.44H3.26a4.69,4.69,0,0,0-3.18,1H0l.93-3.12H1a4.13,4.13,0,0,0,1,.19H12.66a3,3,0,0,0,1.23-.19H14l-.86,3.12H13c-.35-.92-1.41-1-2.3-1H8.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M16.93,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S27.93,73,23.71,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22s-9.74-3.72-9.74-9.09c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M41.78,71.55c3.47,0,6.11,1.65,6.11,4.59S45,81.06,42,81.06a4.54,4.54,0,0,1-1.95-.36c2.3-.13,4.78-1.52,4.78-4,0-2.31-1.66-3.22-3.79-3.22a11.09,11.09,0,0,0-1.87.16V85.41c0,1.47,0,2.51,1.39,3.3v.08H35.27v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.18.16-3.09-1.17-3.62v-.08Z" transform="translate(0 0)" style="fill:#fff"/><path d="M55.77,73.78l-2.64,6.6h5.26Zm-3.34,8.54L51,86c-.56,1.47-.75,2.23.53,2.7v.08H46.67v-.08c1.55-.76,2-2.23,2.59-3.72l4.46-10.93c.37-.94.88-2-.4-2.44v-.08h4.22L63.09,85c.61,1.49,1.09,3,2.62,3.72v.08H60.23v-.08c1.31-.58,1.09-.86.37-2.7l-1.44-3.69Z" transform="translate(0 0)" style="fill:#fff"/><path d="M66,88.79,75.67,73.7l-4.54-.26a5.8,5.8,0,0,0-4,1.13H67l1.36-3H80.2l-9.61,15,5.61.31a9.21,9.21,0,0,0,5.29-1.44h.08l-1.49,3.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M126,80.38v4.74c0,1.18-.16,3.09,1.18,3.59v.08h-5.07v-.08c1.33-.5,1.17-2.41,1.17-3.59V75.22c0-1.18.19-3.09-1.17-3.59v-.08h5.07v.08c-1.34.5-1.18,2.41-1.18,3.62V78.5h9.64V75.25c0-1.21.19-3.12-1.18-3.62v-.08h5.1v.08c-1.36.5-1.2,2.41-1.2,3.59v9.91c0,1.18-.16,3.09,1.2,3.59v.08h-5.1v-.08c1.36-.5,1.18-2.41,1.18-3.59V80.38Z" transform="translate(0 0)" style="fill:#fff"/><path d="M144.09,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S155.09,73,150.87,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22S141,85.49,141,80.12c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M174.5,87.06a6.7,6.7,0,0,1-5.23,2.15,6.63,6.63,0,0,1-4.83-1.83c-1.42-1.52-1.36-3.28-1.36-5.16v-7c0-1.18.19-3.09-1.18-3.59v-.08H167v.08c-1.34.5-1.18,2.41-1.18,3.59v7c0,3.48,1.49,5.11,4.25,5.11a4.75,4.75,0,0,0,3.9-1.83,3.4,3.4,0,0,0,.56-2.38V75.22c0-1.18.16-3.09-1.17-3.59v-.08h5.07l0,.08c-1.36.5-1.2,2.41-1.2,3.62v9.88c0,1.18-.16,3.09,1.2,3.59v.08H174.5Z" transform="translate(0 0)" style="fill:#fff"/><path d="M190.84,74.67A6.14,6.14,0,0,0,186.65,73c-1.52,0-3.44.58-3.44,2.39,0,3.59,9.18,3.54,9.18,8.38,0,2.81-3,5.42-7.15,5.42a14,14,0,0,1-4.78-.79l-.77-3.28a9.34,9.34,0,0,0,5.85,2.17c1.52,0,3.82-.89,3.82-2.73,0-4.09-9.18-3.35-9.18-8.91,0-3.3,3.44-4.56,6.7-4.56a13.65,13.65,0,0,1,4,.58Z" transform="translate(0 0)" style="fill:#fff"/><path d="M198.34,86.59l3.39.31a6.73,6.73,0,0,0,4.94-1.55h.08l-1.2,3.43H194.42v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.21.16-3.12-1.2-3.62v-.08H203a2.79,2.79,0,0,0,1.25-.13h.08v3.06h-.08a3.78,3.78,0,0,0-3.15-1,15.37,15.37,0,0,0-2.72.18V78.5h3.18a2.78,2.78,0,0,0,1.17-.16h.08v2.78h-.08c-.43-.76-1.55-.73-2.38-.73h-2Z" transform="translate(0 0)" style="fill:#fff"/></g><polygon points="101.41 0 33.63 66.53 33.65 66.55 75.94 66.55 75.92 66.53 101.41 41.5 126.91 66.53 126.89 66.55 169.18 66.55 169.2 66.53 101.41 0" style="fill:#9496a1"/><path d="M87.6,66.53,101.41,53l13.81,13.56L101.41,80.08Zm13.82-18.3L82.76,66.53l18.65,18.3,18.65-18.3Z" transform="translate(0 0)" style="fill:#9496a1"/><polygon points="101.41 76.64 91.11 66.53 101.41 56.41 111.72 66.53 101.41 76.64" style="fill:#9496a1"/></g></g></svg>').append("<h3>Your Request Was Received!</h3>").append("<img src='/imgs/checkmark.svg' />").append("<p>Someone from our leasing office will contact you shortly.</p>").hide().fadeIn(1000);
//             },
//             error: function(data){
//                 alert("There was an error submitting your request, please try again");
//             }
//         })
//         event.preventDefault(e);
//     });
// });