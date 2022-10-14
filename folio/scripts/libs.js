VanillaTilt.init(document.querySelector(".menu a"), {
    max: 50,
    speed: 600
});

function cursorMovement(){
    const cursor = document.querySelector(".cursor-inner")
    const cursor2 = document.querySelector(".cursor-outer")
    document.addEventListener("mousemove", e=>{
        cursor.style.top = e.pageY + "px";
        cursor.style.left = e.pageX + "px";
    })
}

function cursorClick(){
    const cursor = document.querySelector(".cursor-inner")
    cursor.addEventListener("onclick",() =>{
        cursor.classList.add('expand')
    } )
}
cursorMovement();
cursorClick();

toChange = document.querySelector("#ABOUT-div")
toAdd = document.querySelector(".add-about")
toChange.HTMLinner = toAdd

