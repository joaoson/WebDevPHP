let campos = Array.from(document.querySelectorAll("input"))

campos.forEach((element)=>{
    console.log(element)
})
document.getElementById("submit").addEventListener("click",()=>{
    campos.forEach((element)=>{
        let regex = /^\d+$/
        if(element.value =="" || regex.test(element.value) == false){
            event.preventDefault();
        }
    })
})
coinDrop();


setInterval(()=>{
    coinDrop();
},2000)

function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

function coinDrop(){
    let main = document.getElementById("main")
    let image = new Image();
    image.src = "./assets/mCc86LoVGl.gif"
    //image.setAttribute('left', getRandomArbitrary(0,1200)+"px !important");
    image.setAttribute('height', '200px');
    let top = -200;
    image.style.top = top+"px";
    image.style.left = getRandomArbitrary(0,1500)+"px";
    image.style.zIndex = getRandomArbitrary(-1,-10)
    image.classList.add("moedas")
    document.body.appendChild(image);
    image
    setInterval(()=>{
        top += 1;
        image.style.top = top+"px";
        if(top > 1200){
            image.remove();
        }
    },10)
}