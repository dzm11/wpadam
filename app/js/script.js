const burger = document.querySelector('.burger');
const body = document.querySelector('body');
const menuItems = document.querySelector('.mobile');
const items = document.querySelectorAll('.nav .mobile .menu .menu__items a');
const social = document.querySelectorAll('.nav .mobile .menu__social .row');

burger.addEventListener("click", () => {
    body.classList.toggle("open");
    menuItems.classList.toggle("open");
    items.forEach(link=>{
        link.classList.toggle("fade");
    social.forEach(row=>{
        row.classList.toggle("fade");
        })
    });

})