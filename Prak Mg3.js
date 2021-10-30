function color(value){
    if(value == "white"){
    document.body.style.backgroundColor = value;
    document.body.style.color = "black";
    }else{
        document.body.style.backgroundColor = value;
        document.body.style.color = "white";
    }
}

function weather(value){
    if(value == "rainy"){
        document.getElementById("teks").innerHTML =
        "It's " + value + ", Just go to sleep again, cause the mood is very Chily"; 
    }else if(value == "cloudy"){
        document.getElementById("teks").innerHTML =
        "It's " + value + ", Better stay at home and just watch anime, because rain will be pouring down asap";
    }
}

function factorial(){
    var num = document.getElementById("number").value;
    var ans = num;
    for(i = ans-1; i > 1;i--){
        ans = ans * i;
    }
    document.getElementById("answer").innerText = 
    "The Factorial of " + num + " is " + ans;
}
