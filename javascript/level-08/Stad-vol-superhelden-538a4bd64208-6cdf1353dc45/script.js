const requestUrl = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

function requestJSON(url) {
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.send();
    request.onload = function () {
        let response = request.response;
        processResponse(response);
    };
}

function sendRequest() {
    requestJSON(requestUrl);
}

function processResponse(response) {
    document.querySelector("#squadName").innerText = response.squadName;
    document.querySelector("#homeTown").innerText = response.homeTown;
    document.querySelector("#formed").innerText = response.formed;
    document.querySelector("#secretBase").innerText = response.secretBase;
    document.querySelector("#active").innerText = response.active;

    var table = document.getElementById('member-table');

    for (const member of response.members) {
        var dinges = table.insertRow(-1);
        for (var key in member) {
            if (member.hasOwnProperty(key)) {
                var blokje = dinges.insertCell(-1);
                var inhoud = document.createTextNode(member[key]);
                blokje.appendChild(inhoud);
            }
        }
    }
}

sendRequest();
