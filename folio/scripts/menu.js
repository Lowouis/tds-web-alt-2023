const btn = document.getElementById('btn-menu-responsive');
const menu = document.getElementById('menu-responsive');

let active = false;
btn.addEventListener('click', () => {
    active ? menu.classList.add('hidden') : menu.classList.remove('hidden');
    active ? btn.innerHTML="menu" : btn.innerHTML="close";
    active = !active;
});

