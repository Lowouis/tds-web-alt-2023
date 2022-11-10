
const color = ['blue', 'green', 'yellow', 'violet', 'red', 'black'];
const play = [null, null];
const canChoose = 'yes';
const answer = [[null,null], [null,null], [null,null], [null,null]];
const show = false;

randomAnswer();
setAnswer(answer);
toggleShow();

addEventListener('click', (event) => {
    let isPlayValid = false;
    isPlayValid = select(event.target);

    if(isPlayValid){
        reset(event.target);
    }

});


function toggleShow(){

    document.getElementById("toggleShow").addEventListener("click", function(event){
        if(event.target.innerText === "SHOW") {
            event.target.innerText = "HIDE";
            document.getElementById('answer_box').classList.remove('hidden');
            alert('Attention vous trichez !');
        }
        else if(event.target.innerText === "HIDE"){
            event.target.innerText = "SHOW";
            document.getElementById('answer_box').classList.add('hidden');;
        }
    });


}

function randomAnswer(){
    let placements = pickRandPlacement();
    for(let i = 0; i < 4; i++){
        answer[i][0] = color[Math.floor(Math.random() * color.length)];
        answer[i][1] = placements[i];
    }
}

function setAnswer(answer){
    console.log(document.getElementById('answer_box').children);
    answer.forEach((index) => {
        let answerTag = document.getElementById('answer_box').children[index[1]-1];
        answerTag.classList.add(index[0]);
    });
}

function pickRandPlacement(){
    let placements = [1,2,3,4];
    let res = [];
    while(placements.length > 0){
        let rand = Math.floor(Math.random() * placements.length);
        res.push(placements[rand]);
        placements.splice(rand, 1);
    }
    return res;
}



const select = (target, isPlayValid)=> {
    play[0] = getColor(target);
    play[1] = getPlacement(target);
    if(play[0] !== null && play[1] !== null){
        return true;
    }
    return false;
}
const getPlacement = ((target) => {
    if(target.classList[0] === 'selector') {
        const listOfButtons = document.getElementsByClassName('selector');
        target.classList.remove('low-op');
        for(let i = 0; i < listOfButtons.length; i++){
            if(target.id !== listOfButtons[i].id){
                listOfButtons[i].classList.add('low-op');
            }
        }


        return target.id;
    }
    return play[1];
});
const getColor = ((target) => {
    if(target.id === 'color-btn'){
        target.classList.remove('low-op');
        const listOfButtons = document.getElementsByClassName('color-select');
        for(let i = 0; i < listOfButtons.length; i++){
            if(target.classList[1] !== listOfButtons[i].classList[1]){
            listOfButtons[i].classList.add('low-op');
            }
        }
        return target.classList[1];
    }
    return play[0];
});
const reset = (target) => {
    let listOfButtons = document.getElementsByClassName('color-select');
    for(let i = 0; i < listOfButtons.length; i++){
            listOfButtons[i].classList.add('low-op');
    }
    listOfButtons = document.getElementsByClassName('selector');
    for(let i = 0; i < listOfButtons.length; i++){
        if(target.id !== listOfButtons[i].id){
            listOfButtons[i].classList.add('low-op');
        }
    }
};