const wrapper = document.querySelector('.menu__wrapper');
const closeBtnMenu = document.querySelector('.close__menu');
const openMenu = document.querySelector('.open__menu');

openMenu.addEventListener('click', (e) => {
  wrapper.style.display = 'block';
});

const closeMenu = () => {
    wrapper.style.display = 'none';
};

wrapper.addEventListener('click', (e) => {
    if(e.target == wrapper){
        closeMenu();
    }
});

closeBtnMenu.addEventListener('click', closeMenu);
