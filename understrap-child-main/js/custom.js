/*jQuery('.zoom').click(function() {

    var imageUrl = $(this).attr('src');
    var imageHeight = $(this).prop('naturalHeight');
    var windowHeight = $(window).height();

    if (imageHeight > windowHeight) {
        var optionalProperty = '; background-size: contain';
    } else {
        var optionalProperty = '';
    }
}
let nav = document.getElementById('main-nav');
//let position = nav.offsetTop;
//let scrolled = document.scrollingElement.scrollTop;

function fade(element) {
    let op = 1;  // initial opacity
    let timer = setInterval(function () {
         if (op >= 10){
             clearInterval(timer);
         }
        element.style.opacity = op/10;
        console.log(op)
        // element.style.filter = 'alpha(opacity=' + op + ")";
         op++;

     }, 50);
    nav.style.backgroundColor = "red";
}

/*
for (let i=1; i<=10; i++) {
    element.style.opacity = i/10;
    console.log(op)
}*/


/*
function unfade(element) {
    var op = 1;  // initial opacity
    element.style.display = 'inherit';
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op + ")";
        op = op - 0.1;
    }, 10);
}
*/
/*

document.addEventListener("scroll", (e) => {
    let scrolled = document.scrollingElement.scrollTop;
    let position = nav.offsetTop;

    if(scrolled > position + 100){
      //  nav.classList.add('curtain-in');
        nav.style.opacity = 0.1;

        fade(nav);

    }
  /*  if(scrolled < position + 100){
        //  nav.classList.add('curtain-in');
        unfade(nav);
        nav.style.backgroundColor = "#000000";
        nav.style.opacity = 1;
    }
});*/