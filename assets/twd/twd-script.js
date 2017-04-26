(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 0)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });


    $('.input-subscribe').change(function() { //.on('input keyup'
        if( $( this ).val() == ''){
            if($( this ).hasClass( "add-color-to-border" )){
                $( this ).removeClass("add-color-to-border");
            }
        }else{
            $( this ).addClass("add-color-to-border");
        }
    });
    /*
    For short code

    <div class="input-group group-subscribe">
    [email* your-email class:input-subscribe class:form-control placeholder "Enter your email"]
    <span class="input-group-btn">
    [submit class:btn class:button-subscribe "Subscribe"]
    </span>
    </div>
     */

})(jQuery); // End of use strict
