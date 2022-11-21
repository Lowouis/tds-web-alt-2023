const c = document.getElementById('canv');
const $ = c.getContext('2d');
document.body.clientWidth;
const wh = 128;
const w2h = wh * wh;
c.width = c.height =  wh;
const img = $.createImageData(wh, wh);
const id = img.data;
let t = 0;
const inc = 1 / wh;
const arr = [];

for(let k = 0; k < w2h; ++k)
    arr[k] = Math.random() * 1.5 - 0.5;

function draw(){
    window.requestAnimationFrame(draw);
    t += inc/16;
    for(let x = 1; x >= 0; x -= inc) {
        for(let y = 1; y >= 0; y -= inc) {
            let idx = (y * wh + x) * wh * 4;
            let dx = x;
            let dy = y;
            let dist = Math.sqrt(dx * dx + dy * dy);
            let ax = oct(x, y);
            let ay = oct(x + 2, y + t / 3);
            let bx = oct(x + dist * .3 + ax / 22 + 0.7, y + ay / 5 + 2);
            let by = oct(x + ax / 3 + 4 * t, y + ay / 3 + 5);
            let n = oct(x + bx / 5, y + by / 2) * 0.7 + .15;
            let d = ax * by / 2;
            let e = ay * bx / 2;

            id[idx] = hue(n + d / 5);
            id[idx + 1] = hue(n / 3 + e / 5 + d);
            id[idx + 2] = hue(d + e);
            id[idx + 3] = hue(1 - ease(dist) * (e + d) * 5)
        }
    }
    $.putImageData(img, 0, 0);
}
function hue($) {
    return 255 * Math.min(Math.max($, 0), 1);
}
function ease(x) {
    return (x > 0.2) ? 0 : i(1, 0, x * 6);
}

const db = document.body;

function i($, db, t) {
    t = t * t * t * (6 * t * t - 15 * t + 10);
    return $ + (db - $) * t;
}
function n(x, y) {
    const i = Math.abs(x * wh + y) % w2h;
    return arr[i];
}
function oct(x, y) {
    const o1 = p(x * 3.0, y * 4.0);
    const o2 = p(x * 4.0, y * 5.0);
    return o1 + o2 * 0.5;
}
function p(x, y) {
    const nx = Math.floor(x);
    const ny = Math.floor(y);
    return i(i(n(nx, ny), n(nx + 1, ny), x - nx), i(n(nx, ny + 1), n(nx + 1, ny + 1), x - nx), y - ny);
}
draw();

