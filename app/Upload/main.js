let secret = document.getElementById("secret");

document.addEventListener('keydown',reveal);

function reveal(e){
    if(e.code==="ArrowUp"){
        secret.classList= "lien reveal";
    }
}