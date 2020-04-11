window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    //window.$ = window.jQuery = require('jquery');
    
    require('../vendor/jquery-1.11.0.min.js');
    require('../vendor/jquery-migrate-1.2.1.min.js')
    require('bootstrap');
    require('../vendor/jquery.flexnav.min.js');
    require('../vendor/jquery.hoverIntent.minified.js');
    require('../vendor/jquery.flickrfeed.js');
    require('../vendor/isotope/jquery.isotope.min.js');
    require('../vendor/isotope/jquery.isotope.sloppy-masonry.min.js');
    require('../vendor/isotope/jquery.imagesloaded.min.js');
    require('../vendor/jquery.fitvids.js');
    require('../vendor/jquery.appear.js');
	require('../vendor/jquery.stellar.min.js');
	require('../vendor/flexslider/jquery.flexslider-min.js');
	require('../vendor/jquery.countTo.js');

    require('./custom.js')

    jQuery(function($){
        $('body').addClass('loading');
    });
    
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: true,
            directionNav: false,
            prevText: "",
            nextText: "",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
