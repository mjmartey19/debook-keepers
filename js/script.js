const menu = document.querySelector(".fa-bars"),
navbar = document.querySelector(".navbar");
// console.log(narbar);
menu.addEventListener("click",()=>{
    navbar.classList.toggle("hide");
})
