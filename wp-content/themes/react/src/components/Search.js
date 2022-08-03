import $ from 'jquery'

class Search {

    // 1. describe and create/initiate our object
    constructor(){
        this.resultsDiv = $("#search-overlay__results");
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay"); 
        this.searchField = $("#search-term");
        this.events();
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.previousValue;
        this.typicTimer;
        
    }

    // 2. events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
        $(document).on("keydown", this.keyPressDispatcher.bind(this));
        this.searchField.on("keyup", this.typicLogic.bind(this));
    }


    // 3. methods ( function, action...)
    typicLogic() {
        if (this.searchField.val() != this.previousValue) {
            clearTimeout(this.typicTimer);

            if (this.searchField.val()) {
                if (!this.isSpinnerVisible) {
                    this.resultsDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible == true;
                }
                this.typicTimer = setTimeout(this.getResults.bind(this), 2000);
            } else {
                this.resultsDiv.html('');
                this.isSpinnerVisible = false;
            }
            
        }
       

        this.previousValue = this.searchField.val();
    }

    getResults() {
       $.getJSON('http://react-demo.local/wp-json/wp/v2/posts?search=' + this.searchField.val(), posts => {
        this.resultsDiv.html(`
        <h2 class="search-overlay__section-title">General Information</h2>
        <ul class="link-list min-list">
        <li><a href="${posts[0].link}" style="color: #000">${posts[0].title.rendered}</a></li>
        </ul>`);
       }); 
        
    }

    keyPressDispatcher(e) {
        console.log( e.keyCode);

        if (e.keyCode == 83  && !this.isOverlayOpen && !$("input, textarea").is(':focus')) {
            this.openOverlay()
        }

        if (e.keyCode == 27  && this.isOverlayOpen) {
            this.closeOverlay()
        }
    }

    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
        this.isOverlayOpen = true;
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
        this.isOverlayOpen = false;
    }
    
}

export default Search;