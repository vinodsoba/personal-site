class MobileMenu {
    constructor() {
      this.menu = document.querySelector(".nav__menu")
      this.openButton = document.querySelector(".nav__menu--trigger")
      this.events()
    }

    events() {
      this.openButton.addEventListener("click", () => this.openMenu())
    }
  
    openMenu() {
      this.openButton.classList.toggle("fa-bars")
      this.openButton.classList.toggle("fa-window-close")
      this.menu.classList.toggle("nav__menu--active")
    }
  }
  
  export default MobileMenu