
const text = document.querySelector('.text-typewriter-effect').innerText;
document.querySelector('.text-typewriter-effect').innerText = "";

let index = 0;
const outputElement = document.querySelector('.text-typewriter-effect');

const intervalId = setInterval(() => {
if (index < text.length) {
    outputElement.textContent += text[index];
    index++;
} else {
    clearInterval(intervalId);
}
}, 7);

