import platformGrass from "./../img/platform-grass.png"

//console.log(platformGrass);
// animation character

const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = window.innerWidth
canvas.width = window.innerHeight

const gravity = 1.5


// Player Class

class Player {
    constructor(){
        this.position = {
            x: 100,
            y: 50
        }

        this.velocity = {
            x: 0,
            y: 1
        }

        this.width = 30
        this.height = 30
    }

    draw() {
        c.fillStyle = 'orange'
        c.fillRect(this.position.x, this.position.y, this.width, this.height)
    }

    update() {
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
        this.width= 200
        this.height = 20

        this.image = image

    }

    draw() {
        //c.fillStyle = 'blue'
        //c.fillRect(this.position.x, this.position.y, this.width, this.height)
        c.drawImage(this.image, this.position.x, this.position.y)
    }
}

const image = new Image()
image.src= platformGrass

const player = new Player()
const platforms = [
    new Platform({
        x:200, 
        y:100,
        image
    }), 
    new Platform({ 
        x: 450, 
        y: 60,
        image
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
    c.clearRect(0, 0, canvas.width, canvas.height)
    player.update()
    platforms.forEach((platform) => { 
        platform.draw()
    })
    

    if (keys.right.pressed && player.position.x < 400) {
        player.velocity.x = 5
    } else if (keys.left.pressed && player.position.x > 100 ) { 
        player.velocity.x =-5 } 
    else { 
        player.velocity.x = 0
        
        if (keys.right.pressed) {
            scrollOffset += 5
            platforms.forEach((platform) => {
                platform.position.x -= 5
            })
            
        } else if ( keys.left.pressed) {
            scrollOffset -= 5

            platforms.forEach((platform) => {
                platform.position.x += 5
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
        player.velocity.y -= 20
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
        player.velocity.y -= 20
        break
    }

  
})