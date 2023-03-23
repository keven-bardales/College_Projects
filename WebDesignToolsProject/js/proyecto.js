let menu = document.querySelector('#menu_bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}



document.querySelector('#icono-search').onclick = () => {
    document.querySelector('#buscar_form').classList.toggle('active');

}

document.querySelector('#close').onclick = () => {
    document.querySelector('#buscar_form').classList.remove('active');

}


var swiper = new Swiper(".slider_inicio", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
   loop :true,
  });

const sections = document.querySelectorAll("section");


sections.forEach(section => {
  section.addEventListener("click", () => {

    section.scrollIntoView({ behavior: "smooth" });
  });
});
