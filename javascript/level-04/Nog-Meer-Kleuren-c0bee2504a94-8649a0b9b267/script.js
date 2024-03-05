function selectColor() {
    let color = document.getElementById('background');
    document.body.style.backgroundColor = color.value;
}

function changeTitleColor() {
    let title = document.getElementById('titel');
    let color = document.getElementById('background');
    title.style.color = color.value;
}

function changeBoth() {
    selectColor();
    changeTitleColor();
}