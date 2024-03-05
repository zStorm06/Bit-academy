const vragen = [
    "Wat is de hoofdstad van Frankrijk?",
    "Hoeveel poten heeft een spin?",
    "Wat is het grootste meer van Nederland?",
    "Wat is een Duits automerk?",
    "Noem een Waddeneiland",
];
const antwoorden = [
    "Parijs",
    8,
    "IJsselmeer",
    ["Volkswagen", "Audi", "Opel", "Porsche", "BMW", "Mercedes"],
    ["Texel", "Vlieland", "Terschelling", "Ameland", "Schiermonnikoog"],
];

function controleerantwoord() {
    let goed = 0;
    let input1 = document.getElementById("eerstevraag").value;
    if (input1 == antwoorden[0]) {
        document.getElementById("eerstevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("eerstevraag").style.background = "#FF0000";
    }
    let input2 = document.getElementById("tweedevraag").value;
    if (input2 == antwoorden[1]) {
        document.getElementById("tweedevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("tweedevraag").style.background = "#FF0000";
    }
    let input3 = document.getElementById("derdevraag").value;
    if (input3 == antwoorden[2]) {
        document.getElementById("derdevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("derdevraag").style.background = "#FF0000";
    }
    let input4 = document.getElementById("verdevraag").value.split(" ");
    for (let i = 0; i < input4.length; i++) {
        if (antwoorden[3].includes(input4[i])) {
            document.getElementById("verdevraag").style.background = "#00FF00";
            goed += 1;
        } else {
            document.getElementById("verdevraag").style.background = "#FF0000";
        }
    }
    let input5 = document.getElementById("vijvdevraag").value.split(" ");
    for (let j = 0; j < input5.length; j++) {
        if (antwoorden[4].includes(input5[j])) {
            document.getElementById("vijvdevraag").style.background = "#00FF00";
            goed += 1;
        } else {
            document.getElementById("vijvdevraag").style.background = "#FF0000";
        }
    }
    document.getElementById("goedeantwoorden").innerHTML = "je hebt " + goed + " punten gescoord";
}