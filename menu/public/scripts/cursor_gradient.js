const cursor = document.querySelector('.cursor');
const a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
    const x = e.clientX;
    const y = e.clientY;
    cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});


document.addEventListener('mousedown', function(){
    cursor.classList.add('click');

});

document.addEventListener('mouseup', function(){
    cursor.classList.remove('click')
});

a.forEach(item => {
    item.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
    });
})