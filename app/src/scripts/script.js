// CALLBACK
$(document).ready(function(){
    // alert('hello');

    $('.bloc-content').addClass('hideme');

    /* FADE // Every time the window is scrolled ... */
    $(window).scroll( function(){

      /* Check the location of each desired element */
        $('.hideme').each( function(i){

            var bottom_of_object = $(this).offset().top -450 + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

          /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                // $(this).animate({'opacity':'1'},500);
                $(this).addClass('showme');

            }

        });

        // set distance user needs to scroll before we start fadeIn
        if ($(this).scrollTop() > 10) {
            $('header').addClass('shadow');
        } else {
            $('header').removeClass();
        }

    });

// ScrollTO Click
    $('.scrollTo').click( function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms) (750 à la base)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });

// BURGER
    $(".burger-menu").click(function () {
        $(this).toggleClass("menu-on");
        $('.menu-list').slideToggle('down');
    });

});
