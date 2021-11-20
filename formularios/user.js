window.onload = function() {
let send_button = document.getElementById("send")
send_button.addEventListener("click", function(){
    console.log("Hello world")
    let data = new FormData()
    let user = document.getElementById('user')
    let pass = document.getElementById('pass')
    data.append("username", user.value)
    data.append("password", pass.value)
    let xhttp =  new XMLHttpRequest()
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.status == 200)
            document.getElementById("demo").innerHTML = "guf";
    }
    xhttp.open("POST", "users.php");
    xhttp.send(data);
})
}