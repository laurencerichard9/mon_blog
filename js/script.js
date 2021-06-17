
// sticky de la nav mobile :

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navmobile");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// pour le champs de recherche du header .

$(document).ready(function () {
    $( "#search" ).click(function() {     
        $('#form-search').toggle("slide", { direction: "right" }, 1000);
     });
    $('#search2').click(function () {
        console.log('ok');
        $('#form-search2').slideToggle();
    });

    // slidetoggle chambres avis
    $('#buttonA').click(function () {
        $('#avis').slideToggle(); // slideToggle : Methode qui permet de faire glisser vers le haut et vers le bas
    });


    $('#barre3').click(function () {
        $('#rideau3').slideToggle(); // slideToggle : Methode qui permet de faire glisser vers le haut et vers le bas
    });

});





// le focus et le blur pour nos champs de formulaire :


$(document).ready(function () {

    $('input').focus(function () {

        $(this).css({
            backgroundColor: '#ff9d67',
            color: 'white'

        });


    });

    $('textarea').focus(function () {

        $(this).css({
            backgroundColor: '#ff9d67',
            color: 'white'

        });


    });

    $('input').blur(function () {

        $(this).css({
            backgroundColor: 'white',
            color: 'black'

        });


    });

    $('textarea').blur(function () {

        $(this).css({
            backgroundColor: 'white',
            color: 'black'

        });


    });


});

//fin de focus et blur .



