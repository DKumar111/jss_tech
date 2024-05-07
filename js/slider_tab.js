//JAVASCRIPT CODE FOR TAB
const tabButtons = document.querySelectorAll('.tablink');
for(let i=0; i<tabButtons.length;i++){
    tabButtons[i].addEventListener('click',function(){
        let tabName = this.dataset.tab;
        let tabContent = document.getElementById(tabName);
        let alltabcontent = document.querySelectorAll(".tabcontent");
        let alltabbuttons = document.querySelectorAll(".tablink");
        for(let j=0;j<alltabcontent.length;j++){
            alltabcontent[j].style.display = "none";
        }
        for(let k=0;k<alltabbuttons.length;k++){
            alltabbuttons[k].classList.remove("active");
        }

        tabContent.style.display = "flex";
        this.classList.add("active");
    })
}
document.querySelector(".tablink").click();
//JAVASCRIPT CODE FOR TAB ENDS HERE

// CARD SLIDE USING WHEEL

let cardSection = document.querySelector(".work_card_section");

cardSection.addEventListener("wheel", (e) =>{
    e.preventDefault(e);
    cardSection.style.scrollBehavior = "smooth";
    cardSection.scrollLeft += e.deltaY;
})



// CARD SLIDE USING WHEEL

//WORTH READ CARD SLIDE USING WHEEL

let worthReadSection = document.querySelector(".worth_read_section");

worthReadSection.addEventListener("wheel", (e) =>{
    e.preventDefault(e);
    worthReadSection.style.scrollBehavior = "smooth";
    worthReadSection.scrollLeft += e.deltaY;
})

//WORTH READ CARD SLIDE USING WHEEL


