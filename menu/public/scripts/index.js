const vues = ["nav_home", "nav_projets", "nav_experience", "nav_formation", "nav_competences", "nav_contact"];
let previousVue = "home"
addEventListener('click', function(e){
    e.target.id.startsWith('card')?  expand(e.target.parentElement) : null;
    e.target.id.startsWith('tab')?  showOnChecked(e.target) : null;
    (exist(e.target.id) && previousVue !== e.target.id.replace('nav_','')) ? load(e.target) : null;
});

const showOnChecked = (target) =>{
    const content = target.parentElement.parentElement.children[1];
    target.checked ? show(content) :  hide(content);
    target.checked ? target.parentElement.children[2].innerHTML = "arrow_forward" : target.parentElement.children[2].innerHTML = "close";
};

const expand = (card) => {
    card.classList.toggle("expand__card");

}


const show = (element) => {
    element.classList.remove("full-hidden");
    setTimeout(() => {
        element.classList.add("show_content");
        element.classList.remove("hide_content");
    }, 100);


}
const hide = (element) => {
    element.classList.add("hide_content");
    element.classList.remove("show_content");
    setTimeout(() => {
        element.classList.add("full-hidden");
    }, 200);

}
const loadPage = document.getElementById("loadPage");
const load = (target) => {
    active_resp ? menu.classList.add('hidden') : menu.classList.remove('hidden');
    active_resp ? btn.innerHTML="menu" : btn.innerHTML="close";
    active_resp = !active_resp;
    entrance();
    setTimeout(() => {
        document.getElementById(`${target.id.replace('nav_','')}`).classList.remove("full-hidden");
        document.getElementById(`${previousVue}`).classList.add("full-hidden");
        previousVue = target.id.replace('nav_','');
        }, 1000);
}
const entrance = () => {
    document.getElementById("loadPage").classList.add("anim-enter");
    setTimeout(() => {
        document.getElementById("loadPage").classList.remove("anim-enter");
    }, 1000);
}
const exist = (vue) => {
    for (let i = 0; i < vues.length; i++) {
        if (vue === vues[i]) {
            return true;
        }
    }
    return false;
}
