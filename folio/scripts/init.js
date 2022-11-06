const [red, green, blue] = [23, 0, 19]
const section1 = document.getElementById('main')


window.addEventListener('scroll', () => {
    const t = window.scrollY / 150
    const y = 1 + (window.scrollY || window.pageYOffset) / 1800
    const [r, g, b] = [red/y, green/y, blue/y].map(Math.round)
    section1.style.backgroundColor = `rgb(${r}, ${g}, ${b})`
})


let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    if(window.innerWidth > 1000){
        const currentScrollPos = window.pageYOffset;
        if(prevScrollpos >= 30){
            document.getElementById("navbar").classList.remove("nav-on-scroll")
            document.getElementById("navbar").classList.add("sticky-to-top")
        }
        else{
            document.getElementById("navbar").classList.remove("sticky-to-top")
            document.getElementById("navbar").classList.add("nav-on-scroll")
        }
        prevScrollpos = currentScrollPos;
    }
}
window.onclick = e => {
    if(e.target.classList[1] != null && e.target.classList[1] == "ab"){
        let TotalClasses = e.target.classList
        TotalClasses.forEach(element =>{
            SelectedButton(element,e.target,"ab")
        })
    }
}

function SelectedButton(selectedClass,target,classToCompare){
    if (selectedClass === classToCompare){
        let brothers =  target.parentNode.children
        for (let i=0; i < brothers.length ; i++){
            if(target.innerHTML !== brothers[i].innerHTML){
                clearBorder(brothers[i])
            }
        }
        target.classList.add("hold-left-border")
        changeArticle(target)
    }
}

function clearBorder(element){
    element.classList.remove("hold-left-border")
    element.classList.add("transparent-border")
}

function changeArticle(target){
   document.getElementById('switcha').innerHTML = articles[target.classList[0]]
}

// 'switcha' <= ou j'insere l'article choisis


let algo = `<article class="star content">
                <h2 class="nice-green">Algorithm A* - Java</h2>
                <h3>2021</h3>
                <p>Nous devions créer une “intelligence artificielle”, ou je devais
                    utilisé l’algorithme A* dans un programme en JAVA. Le jeux ricochet robot était à reproduire avec son
                    interface graphique. Je devais aussi créer plusieurs pateaux de jeu aléatoire.
                    Le tout sur un durée donnée de 4 mois, avec une soutenance oral et un rapport écrit.
                </p>
                <div class="add">
                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Github</a>
                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> Rapport</a>
                </div>
            </article> `

let nim = `<article class="nim content">
             <h2 class="nice-green">Jeux de Nim IA</h2>
             <h3>2019</h3>
             <p>Pour ce projet nous devions réaliser une “inteligence artificielle” qui gagner ou égalise toutes les parties 
                 de jeu de nim que l’on jouait contre l’ordinateur.
                Aucun affichage n’était demandé, le jeu ce était sur le terminal.
             </p>
             <div class="add">
                 <a target=”_blank” class="btn-nf ">Pas d'archive</a>
             </div></article>`

let netflix = `<article class="netflix content">
                    <h2 class="nice-green">Netflix Clone - React</h2>
                    <h3>2019</h3>
                    <p>Ce projet est un projet personnel, je voulais faire un clone de netflix pour apprendre le React. 
                    Dans ce projet j’utilise le module “Redux” et “Axios”. J utilise aussi firebase pour le systeme d’authentification.
                    L’application est disponible sur Firebase et sur Vercel.
                    </p>
                    <div class="add">
                        <a  href="https://github.com/Lowouis/netflix-clone-react" target=”_blank” class="fade btn hover">Github</a>
                        <a target=”_blank” href="https://netflix-clone-8bb18.web.app/" class="btn fade hover">App</a></div>

                </article>`


let bw = '<article class="bw content">\n' +
    '                <h2 class="nice-green">Bataille Navale - Java</h2>\n' +
    '                <h3>2021</h3>\n' +
    '                <p>Worked with a team of three designers to build a marketing website and e-commerce\n' +
    '                    platform for blistabloc, an ambitious startup originating from Northeastern\n' +
    '                    Helped solidify a brand direction for blistabloc that spans both packaging and web\n' +
    '                    Interfaced with clients on a weekly basis, providing technological expertise\n' +
    '                </p>\n' +
    '                <div class="add">\n' +
    '                    <a  href="https://github.com/Lowouis/Bataille-Naval" target=”_blank” class="fade btn hover">Github</a>\n' +
    '                </div>\n' +
    '\n' +
    '            </article> '

let city = `<article class="city content">
                   <h2 class="nice-green">Generateur de ville - Python</h2>
                   <h3>2019</h3>
                   <p>Worked with a team of three designers to build a marketing website and e-commerce
                       platform for blistabloc, an ambitious startup originating from Northeastern
                       Helped solidify a brand direction for blistabloc that spans both packaging and web
                       Interfaced with clients on a weekly basis, providing technological expertise
                   </p>
                   <div class="add">
                        <a target=”_blank” class="btn-nf ">Pas d'archive</a>
                   </div>
            </article> `

const articles = {
    'star' : algo,
    'netflix' : netflix,
    'nim' : nim,
    'bw' : bw,
    'city' : city
}


VanillaTilt.init(document.querySelector(".menu a"), {
    max: 80,
    speed: 600
});


const scrollNavBtn = document.getElementsByClassName('scroll-nav-btn');
const Nav = document.getElementById('navbar');


let show = false;
scrollNavBtn[0].addEventListener('click', () => {
        if(show){
            scrollNavBtn[0].innerHTML = `<span class="material-symbols-outlined">close</span>`
            Nav.style = "display: flex";
        }
        else{
            scrollNavBtn[0].innerHTML = `<span class="material-symbols-outlined">menu</span>`
            Nav.style = "display: none";
        }
        show = show ? false : true;

})

addEventListener('resize', (e) => {
    if(e.target.innerWidth > 1000){
        Nav.style = "display: block";
    }
    else{
        Nav.style = "display: none";
    }
});