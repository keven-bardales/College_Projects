let togglebutton = document.querySelector("#toggler");
let menu = document.querySelector("#nav_links");
let selected = true;

togglebutton.onclick = () => {
  console.log("hola mundo");

  togglebutton.classList.toggle("fa-times");
  menu.classList.toggle("active");
};
