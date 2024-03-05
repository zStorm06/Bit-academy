function gooiButton() {
    try {
        bal.gooi();
    } catch {
        document.getElementById("tekst").innerHTML = "Fout, je hebt de bal al gegooid";
    }
}

function vangButton() {
    try {
        bal.vang();
    } catch {
        document.getElementById("tekst").innerHTML = "Fout, de bal zit niet in de lucht";
    }
}

function resetButton() {
    try {
        bal.reset();
    } catch {
        document.getElementById("tekst").innerHTML = "Fout, je hebt de bal al gereset";
    }    
}


var bal = {
    canvasBal: constructBal(),
    balPositie: "links",

    gooi: function () {
        if (this.balPositie !== "links") {
            throw Error("bal is niet in je handen")
        }
        this.draw(300, 50);
        this.balPositie = "midden";
    },

    vang: function () {
        if (this.balPositie !== "midden") {
            throw Error("de bal is niet in de lucht")
        }
        this.draw(500, 250);
        this.balPositie = "rechts";
    },

    reset: function () {
        this.draw(100, 250);
        this.balPositie = "links";
    },

    draw: function (x, y) {
        this.canvasBal.clearRect(0, 0, 600, 300);
        this.canvasBal.beginPath();
        this.canvasBal.arc(x, y, 50, 0, 2 * Math.PI);
        this.canvasBal.closePath();
        this.canvasBal.fill();
    }
}

function constructBal() {
    let bal = document.getElementById("bal").getContext("2d");
    bal.fillStyle = "red";
    bal.beginPath();
    bal.arc(100, 250, 50, 0, 2 * Math.PI);
    bal.closePath();
    bal.fill();
    return bal
}