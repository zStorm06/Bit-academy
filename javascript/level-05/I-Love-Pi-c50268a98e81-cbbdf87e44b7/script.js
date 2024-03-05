const pi = 3.14;

function berekenOmtrek() {
    const diameterInput = document.getElementById('diameter');
    const diameter = parseFloat(diameterInput.value);

    const omtrek = pi * diameter;
    const resultaatElement = document.getElementById('resultaat');
    resultaatElement.textContent = `De omtrek van de cirkel is: ${omtrek.toFixed(2)}`;
}
