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

