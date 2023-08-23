jQuery(document).ready(function($){

   // var myModal = new bootstrap.Modal(document.getElementById('myModal'), options) se bloque. Le bouton close et la croix ne fonctionnent pas
   $('#myModal').modal('show');

   

});


//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

//fonction "read more des cards"

   function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("savoir");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "En savoir plus";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Fermer";
        moreText.style.display = "inline";
      }
    } 