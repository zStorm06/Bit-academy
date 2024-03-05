const pi = 3.14;

function berekenOmtrekEnOppervlakte() {
    const diameterInput = document.getElementById('diameter');
    const diameter = parseFloat(diameterInput.value);
    const omtrek = pi * diameter;
    const oppervlakte = pi * diameter * diameter * 0.25;
    const resultaatElement = document.getElementById('resultaat');
    resultaatElement.textContent = `Omtrek: ${omtrek.toFixed(2)} oppervlakte: ${oppervlakte.toFixed(2)}`;
}

function updateTijd() {
    const huidigeTijd = new Date();

    const uren = huidigeTijd.getHours();
    const minuten = huidigeTijd.getMinutes();
    const seconden = huidigeTijd.getSeconds();

    const geformatteerdeTijd = formatteerTijd(uren, minuten, seconden);

    const tijdElement = document.getElementById('tijd');
    tijdElement.textContent = `Huidige tijd: ${geformatteerdeTijd}`;
}

function formatteerTijd(uren, minuten, seconden) {
    return `${padNul(uren)}:${padNul(minuten)}:${padNul(seconden)}`;
}

function padNul(cijfer) {
    return cijfer < 10 ? `0${cijfer}` : cijfer;
}

setInterval(updateTijd, 1000);

window.onload = function () {
    updateTijd();
};