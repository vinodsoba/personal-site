    jQuery(function($) {
    
        $(window).on( 'load', function(){
            $('.myservices').addClass('hide-opacity');
            $('.item-1').addClass('hide-opacity');
        });
    
        $(document).ready(function(){
    
            var boxDraw = $(".myservices");
            var boxDrawTop = boxDraw.offset().top;
            var windowHeight = $(window).height();
           
    
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                    console.log(scroll + 'px');
                // let's fire up animation when .box is in view
                if ( scroll >= ( boxDrawTop - windowHeight )) {
                    boxDraw.addClass("show-opacity");             
                } 
    
            });
          
        });    
    });
    
    
    // animation in about page
    
    jQuery(function($) {
        
        $(document).ready(function(){
            var boxDraw = $(".item-1");
            var boxDrawTop = boxDraw.offset().top;
            var windowHeight = $(window).height();
           
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                console.log(scroll + 'px');
    
                // let's fire up animation when .box is in view
                if ( scroll >=  ( boxDrawTop - windowHeight )) {
                    boxDraw.addClass("animated slideInLeft show-opacity");
                } else if (!$(window).scroll()) {
                    $(window).on('load', function(){
                        $('.item-1').addClass('show-opacity');
                    });
                }
    
            });
        });
    });
    
    
    jQuery(function($) {
    
        $(window).on( 'load', function(){
            $('.myportfolio').addClass('hide-opacity');
        });
    
        $(document).ready(function(){
    
            var boxDrawPortfolio = $(".myportfolio");
            var boxDrawTopPort = boxDrawPortfolio.offset().top;
            var windowHeight = $(window).height();
           
            $(window).scroll(function() {          
            
            var scroll = $(window).scrollTop();
            
            // let's fire up animation when .box is in view
    
            if ( scroll >=  ( boxDrawTopPort - windowHeight )) {
                $('.myportfolio').addClass('animated moveInUp');
            }
            });
        });
    });
    
    jQuery(function($) {
        $(document).ready(function(){
            $(".js-search-trigger").click(function(){
                $('.search-overlay').addClass('search-overlay--active');
            });
    
            $(".search-overlay__close").click(function(){
                $('.search-overlay').removeClass('search-overlay--active');
            });
    
        });
    
        $(document).on("keyup", function(e){
            
            if(e.keyCode == 83){
                $('.search-overlay').addClass('search-overlay--active');
            }
    
            if(e.keyCode == 27){
                $('.search-overlay').removeClass('search-overlay--active');
            }
        });
    });
