// Get the button
let mybutton = document.getElementById("toTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    //mybutton.style.display = "block";
    //mybutton.style.opacity = 0;
    mybutton.classList.add('is-visible');
  } else {
    mybutton.classList.remove('is-visible');
    //mybutton.style.display = "none";
    //mybutton.style.opacity = 0;
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
