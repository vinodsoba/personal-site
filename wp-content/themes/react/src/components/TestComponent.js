class TestComponent {
    constructor(){
    this.openButton = document.querySelector(".click-me")
    this.events()
    }

    events(){
        this.openButton.addEventListener("click", () => this.openMenu())
    }

    openMenu(){
        console.log("Test Component is Working");
    }
    

}

export default TestComponent;