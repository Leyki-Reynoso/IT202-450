const canvas = document.querySelector('canvas')
const context = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

class Player {
    constructor(x,y,radius,color) {
        this.x = x
        this.y = y
        this.radius = radius 
        this.color = color
    }
    draw(){
        context.beginPath()
        context.arc(this.x, this.y, this.radius, 0, Math.PI*2,false)
        context.fillStyle = this.color
        context.fill()
    }
}

class Projectile{
    constructor(x,y,radius,color,velocity){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }
    draw(){
        context.beginPath()
        context.arc(this.x, this.y, this.radius, 0, Math.PI*2,false)
        context.fillStyle = this.color
        context.fill()
    }
    update(){
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}

class Enemy{
    constructor(x,y,radius,color,velocity){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }
    draw(){
        context.beginPath()
        context.arc(this.x, this.y, this.radius, 0, Math.PI*2,false)
        context.fillStyle = this.color
        context.fill()
    }
    update(){
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}


const player = new Player(canvas.width/2, canvas.height/2,30,'red')
player.draw()
const projectiles = []
const enemies = []

function spawnEnemies(){
    setInterval(() => {
        const radius = 30
        const x = Math.random() * canvas.width
        const y = Math.random() * canvas.height
        const color = 'green'
        const angle = Math.atan2(player.y - y, palter.x - x)
        const velocity = {x: Math.cos(angle), y: Math.sin(angle)}
        enemies.push(new Enemy(x, y, radius, color, velocity))
    }, 1000)
}

function animate()
{
    requestAnimationFrame(animate)
    context.clearRect(0,0,canvas.width,canvas.height)
    player.draw()
    projectiles.forEach((projectile) =>{ projectile.update()})
    enemies.forEach((enemy) => {
        enemy.update()
    })
}

addEventListener('click', (event) => {
    const angle = Math.atan2(event.clientY - player.x, event.clientX - player.y)
    const velocity = {x: Math.cos(angle), y: Math.sin(angle)}
    projectiles.push(new Projectile(player.x,player.y, 5, 'orange', velocity))
})

animate()
spawnEnemies()