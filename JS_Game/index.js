const color = ['blue', 'green', 'yellow', 'violet', 'red', 'black'];
let play = [[null,null],[null,null],[null,null],[null,null]];
let path = [null,null]
const answer = [[null,null], [null,null], [null,null], [null,null]];
let readyToPlay = false;
let playedColor = null;
let playedPos = null;
let tries = document.getElementById('S_right').children.length - 2;
let helper = [];
randomAnswer();
setAnswer(answer);
toggleShow();

//TOOLS & UTILS
const short = (list)=> {
    const cp = list
    const shorted = [];
    for(let j = 1 ; j <= 4 ; j++){
        for(let i = 0 ; i < 4 ; i++){
            if(cp[i][1] === j){
                shorted.push(cp[i]);
            }
        }
    }
    return shorted;
}

let shortedAnswer = short(answer);

addEventListener('click', (event) => {
    confirmRules(event.target);
    playedColor = selectColor(event.target);
    playedPos = parseInt(selectPos(event.target));
    setColorToButton();
    composePlay();
    togglePlay(event.target);
});

const confirmRules = (target) => {
    if(target.id === 'ok'){
        document.getElementsByClassName('rules')[0].classList.add('hidden');
    }
};


const fillFrontHelper = () => {
    const childrenNode = document.getElementsByClassName('helper')[tries].children;
    const helperElements = [];
    for(let i = 0; i < childrenNode.length; i++){
        helperElements.push(childrenNode[i].children[0])
        helperElements.push(childrenNode[i].children[1])
    }
    for(let i = 0; i < helper.length; i++){
        if(helper[i] === true){
            helperElements[i].classList.add('true');
        }
        else if(helper[i] === null){
            helperElements[i].classList.add('almost');
        }
    }

};
console.log(answer)

const checkResult = () => {
    for (let i = 0; i < play.length; i++) {
        for (let j = 0; j < play[i].length; j++) {
            if (play[i][j] === null) {
                return false;
            }
        }
    }
    return true;
}

const composePlay = () => {
    const front = document.getElementsByClassName('selector');
    for(let i = 0; i < front.length; i++){
        if(front[i] !== undefined && hasColor(front[i])){
            play[playedPos-1][0] = playedColor;
            play[playedPos-1][1] = playedPos;
        }
    }
};

const hasColor = (target) => {
    for(let i = 0; i < color.length; i++){
        if(target.classList.contains(color[i])){
            return true;
        }
    }
    return false;
};

//USER
function toggleShow(){
    document.getElementById("toggleShow").addEventListener("click", function(event){
        if(event.target.innerText === "SHOW") {
            event.target.innerText = "HIDE";
            document.getElementById('answer_box').classList.remove('hidden');
            alert('Attention vous trichez !');
        }
        else if(event.target.innerText === "HIDE"){
            event.target.innerText = "SHOW";
            document.getElementById('answer_box').classList.add('hidden');
        }
    });


}

const togglePlay = (target) => {
    if(target.id === 'submit' && checkResult() && tries >= 0){
        push();
        almostWin();
        fillFrontHelper();
        if(winAble()){
            document.getElementsByClassName('confirmWin')[0].classList.remove('hidden');
        }
        if (tries === 0 && !winAble()){
            document.getElementsByClassName('confirmLoose')[0].classList.remove('hidden');
        }
        tries -= 1;
        reset();
    }
    if(target.id === 'reload'){
        window.location.reload();
        document.getElementsByClassName('confirmWin')[0].classList.add('hidden');
        document.getElementsByClassName('confirmLoose')[0].classList.add('hidden');
    }


}

const winAble = () => {
    const shortedPlay = short(play);
    for(let i = 0 ; i < shortedAnswer.length ; i++){
        if(shortedPlay[i][0] !== shortedAnswer[i][0]){
            return false;
        }
    }
    return true;
};

const splitForColor = (list) => {
    const color = [];
    for(let i = 0; i < list.length; i++){
        color.push(list[i][0]);
    }
    return color;
};
const splitForPos = (list) => {
    const pos = [];
    for(let i = 0; i < list.length; i++){
        pos.push(list[i][0]);
    }
    return pos;
};
const almostWin = () => {
    let colorLastVisitedIndex = [['blue',0],['green',0],['yellow',0],['violet',0],['red',0],['black',0]]
    let AnswerShort = splitForColor(short(answer))
    let PlayShort  = splitForColor(short(play))
    for(let i = 0 ; i < AnswerShort.length ; i++){
        if(PlayShort[i] === AnswerShort[i]){
            helper.push(true);
        }
        else{
            let lastIndex = findIndexOfColor(colorLastVisitedIndex, AnswerShort[i])
            for(let j = lastIndex ; j < PlayShort.length ; j++){
                if(PlayShort[j] === AnswerShort[i]){
                    helper.push(null);
                    colorLastVisitedIndex[findIndexOfColor(colorLastVisitedIndex, AnswerShort[i][0])] = j+1;
                }
            }
        }
    }
    return helper;
}

function findIndexOfColor(list,color){
    for(let i = 0 ; i < list.length;i++){
        if(list[i][0] === color){
            return i;
        }
    }
}


function removeA(arr) {
    let what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while((ax= arr.indexOf(what)) !== -1){
            arr.splice(ax, 1);
        }
    }
    return arr;
}

const push = () => {
    const targeted = document.getElementById('S_right').children[tries].children[0];
    changeColorOfLine(targeted);
}



// USER CHOOSE COLORS AND PLACEMENTS
const getPlacement = ((target) => {
    if(target.classList[0] === 'selector'){
        const listOfButtons = document.getElementsByClassName('selector');
        target.classList.remove('low-op');
        for(let i = 0; i < listOfButtons.length; i++){
            if(target.id !== listOfButtons[i].id){
                listOfButtons[i].classList.add('low-op');
            }
        }
        //console.log(`J'envoie le placement : ${target.id}`);
        return target.id;
    }
    //console.log(`J'envoie le placement par d??faut : ${playedPos}`);
    return playedPos;
});
const getColor = ((target) => {
    if(target.id === 'color-btn' && target.id !== 'selector'){
        target.classList.remove('low-op');
        const listOfButtons = document.getElementsByClassName('color-select');
        for(let i = 0; i < listOfButtons.length; i++){
            if(target.classList[1] !== listOfButtons[i].classList[1]){
            listOfButtons[i].classList.add('low-op');
            }
        }
        //console.log(`J'ai trouve une couleur : ${target.classList[1]}`);
        return target.classList[1];
    }
    //console.log(`J'ai une couleur par d??faut : ${playedColor}`);
    return playedColor;
});
const selectColor = (target)=> {
    return getColor(target) ?? null;
}
const selectPos = (target)=> {
    let res = getPlacement(target)
    if(res !== undefined && !isNaN(res)){
        return res
    }
    return null;
}
const setColorToButton = () => {
    const allButtons = document.getElementsByClassName('selector');
    for(let i = 0; i < allButtons.length; i++){
        if(parseInt(allButtons[i].id)=== playedPos && playedColor !== null){
            rmOldColor(allButtons[i]);
            allButtons[i].classList.add(playedColor);
        }
    }
};
function rmOldColor(target){
    for(let i = 0; i < color.length; i++){
        target.classList.remove(color[i]);
    }
}


// USER FRONT END
const changeColorOfLine = (target) => {
    //loop on play
    for(let i = 0; i < play.length; i++){
        target.children[play[i][1]-1].classList.add(play[i][0]);
    }

}



// USER RESETS
const reset = () => {
    let listOfButtons = document.getElementsByClassName('color-select');
    for(let i = 0; i < listOfButtons.length; i++){
            listOfButtons[i].classList.add('low-op');
    }
    listOfButtons = document.getElementsByClassName('selector');
    for(let i = 0; i < listOfButtons.length; i++){
            listOfButtons[i].classList.add('low-op');
    }

    //color selector reset
    const rmSelectorColored = document.getElementsByClassName('selector')
    for (let i = 0; i < rmSelectorColored.length; i++){
        rmOldColor(rmSelectorColored[i]);
    }
    //reset the user's play
    play = [[null,null],[null,null],[null,null],[null,null]];
    playedColor = null;
    playedPos = null;
    helper = [];
};

// COMPUTER BACK END
function randomAnswer(){
    let placements = pickRandPlacement();
    for(let i = 0; i < 4; i++){
        answer[i][0] = color[Math.floor(Math.random() * color.length)];
        answer[i][1] = placements[i];
    }
}
function setAnswer(answer){
    answer.forEach((index) => {
        let clickAnswer = document.getElementsByClassName('answer_box')[0].children[index[1]-1];
        let LooseAnswer = document.getElementsByClassName('answer_box')[1].children[index[1]-1];
        clickAnswer.classList.add(index[0]);
        LooseAnswer.classList.add(index[0]);

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
