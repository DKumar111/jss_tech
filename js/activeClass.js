// let header = document.getElementById("mobile_side_nav");
// let btns = header.getElementsByClassName("nav_btn");
// for (let i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     let current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }

// const links = document.querySelectorAll('.nav_btn');
    
// if (links.length) {
//   links.forEach((link) => {
//     link.addEventListener('click', (e) => {
//       links.forEach((link) => {
//           link.classList.remove('active');
//       });
//       e.preventDefault();
//       link.classList.add('active');
//     });
//   });
// }

// document.querySelectorAll(".nav_btn").forEach((ele) =>
//   ele.addEventListener("click", function (event) {
//     event.preventDefault();
//     document
//       .querySelectorAll(".nav_btn")
//       .forEach((ele) => ele.classList.remove("active"));
//     this.classList.add("active")
//   })
// );