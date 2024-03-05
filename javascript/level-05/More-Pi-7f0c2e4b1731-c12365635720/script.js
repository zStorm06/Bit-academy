const pi = 3.14;

function berekenOmtrekEnOppervlakte() {
    const diameterInput = document.getElementById('diameter');
    const diameter = parseFloat(diameterInput.value);
    const omtrek = pi * diameter;
    const oppervlakte = pi * diameter * diameter * 0.25;
    const resultaatElement = document.getElementById('resultaat');
    resultaatElement.textContent = `Omtrek: ${omtrek.toFixed(2)} oppervlakte: ${oppervlakte.toFixed(2)}`;
}