const btn = document.getElementById('btn-menu');
const menu = document.getElementById('menu');

let active_resp = false;
btn.addEventListener('click', () => {
    active_resp ? menu.classList.add('hidden') : menu.classList.remove('hidden');
    active_resp ? btn.innerHTML="menu" : btn.innerHTML="close";
    active_resp = !active_resp;
});