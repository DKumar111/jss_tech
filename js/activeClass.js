// Add active class to the current button (highlight it)
let header = document.getElementById("menu");
let libtn = document.getElementsByClassName("menu_item");
let btns = document.getElementsByClassName("nav-link");
console.log(btns);
console.log(header);
console.log(libtn);
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  let current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}