jQuery(function($) {
    $(document).ready(function(){
        $(window).on('load', function(){
            $('.dropdown-menu').hide();
        });
        $('.dropdown-toggle').click(function(){
            $('.dropdown-menu').toggle();
    });
        });
        
})


