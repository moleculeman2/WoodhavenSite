// When the user scrolls the page, execute myFunction

// Get the navbar
var nav = document.getElementById("nav");

// Get the offset position of the navbar
var main = document.getElementById("main");

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function setNavOffset() {
  nav.classList.add("sticky")
  var sticky = nav.offsetHeight;
  main.style.paddingTop = sticky.toString()+"px";
} 