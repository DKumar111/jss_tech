// const header = document.getElementById("menu_m");
// console.log(header);
// const btns = header.getElementsByClassName("menu_item");
// console.log(btns);
// for (let i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
  
//   const current = document.getElementsByClassName("active__class");
  
//   if (current.length > 0) { 
//     current[0].className = current[0].className.replace(" active__class", "");
//   }
//   this.className += " active__class";
//   });
// }

// Get the container element
var btnContainer = document.getElementById("menu_m");

// Get all buttons with class="btn" inside the container
var btns1 = btnContainer.getElementsByClassName("menu_item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns1.length; i++) {
  
  btns1[i].addEventListener("click", function(e) {
  //  e.preventDefault(e);
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
  
      current[0].className = current[0].className.replace(" active", "");
    }
    // Add the active class to the current/clicked button
    this.className += " active";
  });
}


// const currentLocation = location.href;

// const menu_items = document.querySelectorAll(".menu_item");

// const menuLength = menu_items.length;
// for(let i=0 ; i<menuLength; i++){
//   if(menu_items[i].href === currentLocation){
//     menu_items[i].className = "active__class"
//   }
// }


// const nav_links = document.querySelectorAll(".menu_item");
// console.log(nav_links);
// nav_links.forEach(navLink => {
//   navLink.addEventListener('click', () => {
//     document.querySelector('.active__class').classList.remove('active__class')
//     navLink.classList.add("active__class");           
//   })
// })