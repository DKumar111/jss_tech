const tabButtons = document.querySelectorAll('.button');
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