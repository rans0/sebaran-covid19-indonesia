const menuBtn = document.querySelector('.menu-btn');
const x = document.getElementById("menu-responsive");

let menuOpen = true;
menuBtn.addEventListener('click', () =>{
  if(!menuOpen) {
    menuBtn.classList.add('open');
    x.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    x.classList.remove('open');
    menuOpen = false;
  }
});