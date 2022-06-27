import background from "./../img/background_layer_1.png"
import platformGrass from "./../img/platform-grass.png"
import dune from "./../img/dune2.png"
import vinnySlides from './../img/vinny-slides.png'
import vinnyFacingLeft from "./../img/vinnyFacingLeft.png"
import vinnyFacingRight from "./../img/vinnyFacingRight.png"
//console.log(platformGrass);
// animation character

const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = 1500
canvas.height = 576

const gravity = 1.5


// Player Class

class Player {
    constructor(){
        this.speed = 10
        this.position = {
            x: 100,
            y: 100
        }

        this.velocity = {
            x: 0,
            y: 1
        }

        this.width = 157
        this.height = 206

        this.frameIndex = 0

        this.image = createImage(vinnyFacingRight)
        this.frames = 0
    }

    draw() {
        //c.fillStyle = 'red'
        //c.fillRect(this.position.x, this.position.y, this.width, this.height)
        c.drawImage(
            this.image, 
            this.frameIndex * this.width,
            0,
            157,
            206,
            this.position.x, 
            this.position.y, 
            this.width, 
            this.height
        )

    }

    update() {
        this.frames++
        if(this.frames > 20) {
            this.frameIndex++;
            this.frames = 0;
        }

        if(this.frameIndex > 2 ) {
            this.frameIndex = 0;
        }

        
       
        this.draw()
        this.position.y += this.velocity.y
        this.position.x += this.velocity.x
        this.velocity.y += gravity

        if(this.position.y +this.height + this.velocity.y <= canvas.height)
        this.velocity.y += gravity
        else this.velocity.y = 0
        
        
    }
}


// Platform Class

class Platform {
    constructor({ x, y, image}) {
        this.position = {
            x,
            y
        }
        this.image = image
        this.width= image.width
        this.height = image.height

        

    }

    draw() {
        //c.fillStyle = 'blue'
        //c.fillRect(this.position.x, this.position.y, this.width, this.height)
        c.drawImage(this.image, this.position.x, this.position.y)
    }
}

// Generic Object Class

class GenericObject {
    constructor({ x, y, image}) {
        this.position = {
            x,
            y
        }
        this.image = image
        this.width= image.width
        this.height = image.height
    }

    draw() {
        //c.fillStyle = 'blue'
        //c.fillRect(this.position.x, this.position.y, this.width, this.height)
        c.drawImage(this.image, this.position.x, this.position.y, this.width, this.height)
    }
}


function createImage(imageSrc){
    const image = new Image()
    image.src= imageSrc
    return image
}

const platformImage = createImage(platformGrass)

const player = new Player()
const platforms = [
    new Platform({
        x:-1, 
        y:430,
        image: platformImage
    }), 
    
    new Platform({ 
        x: platformImage.width -2, 
        y: 470,
        image: platformImage
    }),
    new Platform({ 
        x: platformImage.width * 2 + 100,
        y: 470,
        image: platformImage
    })
]

const genericObjects = [
    new GenericObject({
        x: 0,
        y: 0,
        width: .100,
        image: createImage(background)
    }),
    new GenericObject({
        x: 1,
        y: 1,
        image: createImage(dune)
    })
]


const keys = {
    right: {
        pressed: false
    },
    left: {
        pressed: false
    }
}


let scrollOffset = 0

function animate(){
    requestAnimationFrame(animate)
    c.fillStyle = "white"
    c.fillRect(0, 0, canvas.width, canvas.height)

    genericObjects.forEach(genericObject => {
        genericObject.draw()
    })
    
    platforms.forEach((platform) => { 
        platform.draw()
    })
    
    player.update()

    if (keys.right.pressed && player.position.x < 400) {
        player.velocity.x = player.speed
    } else if (keys.left.pressed && player.position.x > 100 ) { 
        player.velocity.x =- player.speed } 
    else { 
        player.velocity.x = 0
        
        if (keys.right.pressed) {
            scrollOffset += player.speed
            platforms.forEach((platform) => {
                platform.position.x -= player.speed
            })

            genericObjects.forEach((genericObject) => {
                genericObject.position.x -= player.speed * .66
            })
            
        } else if ( keys.left.pressed) {
            scrollOffset -= player.speed

            platforms.forEach((platform) => {
                platform.position.x += player.speed
            })

            genericObjects.forEach((genericObject) => {
                genericObject.position.x += player.speed
            })
        }
    }


    // platform collision detection
    platforms.forEach((platform) => {
        if (player.position.y + player.height <= platform.position.y 
            && player.position.y + player.height + player.velocity.y
            >= platform.position.y && player.position.x + player.width >= platform.position.x
            && player.position.x <= platform.position.x + platform.width)  {
            player.velocity.y = 0
        }
    })

    if (scrollOffset > 700) {
        console.log('You win');
    }
}

animate();

addEventListener('keydown', ( { keyCode} ) => {
    // console.log(keyCode)
     switch (keyCode) {
        case 65: 
        console.log('left')
        keys.left.pressed = true
        break

        case 90: 
        console.log('down')
        break

        case 68: 
        console.log('right')
        player.velocity.x = 1
        keys.right.pressed = true
        break

        case 87: 
        console.log('up')
        player.velocity.y -= 40
        break
    }

})



addEventListener('keyup', ( { keyCode} ) => {
    // console.log(keyCode)
     switch (keyCode) {
        case 65: 
        console.log('left')
        keys.left.pressed = false
        break

        case 90: 
        console.log('down')
        break

        case 68: 
        console.log('right')
        player.velocity.x = 0
        keys.right.pressed = false
        break

        case 87: 
        console.log('up')
        player.velocity.y -= 10
        break
    }

  
})