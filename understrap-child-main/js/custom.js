let nav = document.getElementById('main-nav');
let position = nav.offsetTop;
let scrolled = document.scrollingElement.scrollTop;

window.addEventListener('scroll',(event) => {
   /* console.log(nav);
    nav.style.backgroundColor ="#212121FF";
    unfade(nav);*/
});

function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}

function unfade(element) {
    var op = 0.1;  // initial opacity
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
}



//const content = document.getElementById("content");
document.addEventListener("scroll", (e) => {
    let scrolled = document.scrollingElement.scrollTop;
    let position = nav.offsetTop;

    if(scrolled > position + 200){
      //  nav.classList.add('curtain-in');

        nav.style.backgroundColor = "#080f24";
    }
    if(scrolled < position + 200){
        //  nav.classList.add('curtain-in');
        nav.style.backgroundColor = "#000000";
    }
});