const canvas = document.querySelector('canvas')
const context = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight
const scoreEL = document.querySelector('#scoreEl')
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
let animationId
let score = 0
function save(){
    $.ajax({
        method: "POST",
        url: "save_scores.php",
        data: {text: score}
      }).done(function(response) {
        if(response == "saved"){
            confirm("Score saved");
        }
        else{
            alert("you are not logged in, score wasn't saved")
        }
      });
}
function gameOver(){
    context.fillStyle = '#000000'
    context.font = '24px Arial'
    context.textAlign = 'center'
    context.fillText('Game Over. Final Score: ' + score, canvas.width / 2, canvas.height/4)
    save()
}

const player = new Player(canvas.width/2, canvas.height/2,30,'red')
player.draw()
const projectiles = []
const enemies = []

function spawnEnemies(){
    setInterval(() => {
        const radius = 20
        
        let x
        let y

        if(Math.random() < 0.5){
            x = Math.random() < 0.5 ? 0 - radius: canvas.width + radius
            y = Math.random() * canvas.height
        }
        else{
            x = Math.random() * canvas.width
            y = Math.random() < 0.5 ? 0 - radius : canvas.height + radius
        }
        const color = 'green'
        const angle = Math.atan2(player.y - y, player.x - x)
        const mult = 2
        const velocity = {x: mult*Math.cos(angle), y: mult*Math.sin(angle)}
        enemies.push(new Enemy(x, y, radius, color, velocity))
    }, 1000)
}


function animate()
{ 
    animationId = requestAnimationFrame(animate)
    context.clearRect(0,0,canvas.width,canvas.height)
    player.draw()
    projectiles.forEach((projectile) =>{projectile.update()})
    
    enemies.forEach((enemy, index) => {
        enemy.update()
        const dist = Math.hypot(player.x - enemy.x, player.y - enemy.y)
            if(dist - enemy.radius - player.radius < 1)
            {
                cancelAnimationFrame(animationId)
                gameOver()
            }
        projectiles.forEach((projectile, projectileIndex) => {
            const dist = Math.hypot(projectile.x - enemy.x, projectile.y - enemy.y)
            if(dist - enemy.radius - projectile.radius < 1)
                {
                score += 1
                scoreEL.innerHTML = score

                setTimeout(() => {
                    enemies.splice(index, 1)
                    projectiles.splice(projectileIndex, 1)
                }, 0);
             }
            })
        })
}

addEventListener('click', (event) => {
    const angle = Math.atan2(event.clientY - player.y, event.clientX - player.x)
    const mult = 4;
    const velocity = {x: mult*Math.cos(angle), y: mult*Math.sin(angle)}
    projectiles.push(new Projectile(player.x,player.y, 5, 'orange', velocity))
})

animate()
spawnEnemies()