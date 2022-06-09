jQuery(function($) {

    $(window).on( 'load', function(){
        console.log('window is loaded');
        $('.myservices').addClass('hide-opacity');
    });

    $(document).ready(function(){
        /*$('.down-arrow').click(function () {
            $('#section1').addClass('animated slideInUp');
        });*/

        

        var boxDraw = $(".myservices");
        var boxDrawTop = boxDraw.offset().top;
        var windowHeight = $(window).height();

       

            $(window).scroll(function() {
                
                var scroll = $(window).scrollTop();

                console.log(scroll + 'px');

                // let's fire up animation when .box is in view

                if ( scroll >= ( boxDrawTop - windowHeight ) ) {
                    
                        boxDraw.addClass("show-opacity");
                
                    
                } 
            });
    });    
});


