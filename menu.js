const calories = {burger: "350", hotdog: "290", taco: "225", fries: "315", drink: "150"};
const imgs = Array.from(document.getElementsByTagName("img"));

function start(){

    imgs.forEach(img => {
        img.addEventListener("click", effect, false);
    });

    
}
function effect(e){
    for (const x in calories) {
        if (e.target.getAttribute("id") == x) {
            document.getElementById("output").innerHTML = "Item Calories: " + calories[x];
            
        }
    }
}

window.addEventListener("load", start, false);

