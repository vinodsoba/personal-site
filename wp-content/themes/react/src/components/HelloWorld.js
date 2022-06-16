import $ from 'jquery'
class Search {
        constructor() {
            this.openButton = $(".js-search-trigger");
            this.searchOverlay = $(".search-overlay");
        }

       

        // 2. event
        events() {
            this.openButton.on('click', this.openOverlay.bind(this));
        }
        

        // 3. method, function action
        openOverlay(){
            this.searchOverlay.addClass("search-overlay--active");
        }

    
    }

export default Search;