


// popup.setAttribute("style", "border: solid 1px black; margin: 25px; padding: 25px; width: 250px; height:250px; align-items:center; display:flex; justify-content: center; cursor: pointer;");

document.body.setAttribute("style", "display:flex; justify-content: center;")

for (let i = 0; i < 3; i++) {
    let popup = document.createElement('div');
    popup.className = "popup";
    document.body.append(popup);

    let p = document.createElement('p');
    p.textContent = "popup";
    popup.append(p);

}
document.body.addEventListener('click', function (e) {
    if (e.target.className == "popup")
        e.target.setAttribute('style', 'background-color:' + getRandomColor());
    else if (e.target.parentElement.className == "popup")
        e.target.parentElement.setAttribute('style', 'background-color:' + getRandomColor());
})

function getRandomColor() {
    let red = generateColor();
    let green = generateColor();
    let blue = generateColor();

    return "#" + red + green + blue;
}

function generateColor() {
    let number = Math.floor(Math.random() * 255);
    if (number < 16) {
        number = '0' + number.toString(16);
    }
    return number.toString(16);
}