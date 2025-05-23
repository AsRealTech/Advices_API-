

// async function sendMessage()

 function sendMessage(){
    var btn = document.querySelector("#btn");
    var no = 1;

    btn.addEventListener("click", async function(){
        try{
            const resp = await fetch("https://api.adviceslip.com/advice", {
                method: "GET"
            });
            const data = await resp.json();
            var response = document.querySelector(".response");
            response.innerHTML += no++ + '. ';
            response.innerHTML += data.persons[1].Religion[1] + "<br>";
        }catch(err){
            console.log("Error: ", err);
        }  // ends try catch 
    })
}
sendMessage();
