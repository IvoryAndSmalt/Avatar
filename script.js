function surligne(champ, erreur) {
    if (erreur)
        champ.style.backgroundColor = "rgba(255,0,0,0.2)";
    else
        champ.style.backgroundColor = "";
}

function verifname(champ) {
    if (champ.value.length < 1 || champ.value.length > 31) {
        surligne(champ, true);
        return false;
    }
    else {
        surligne(champ, false);
        return true;
    }
}

function verifemail(champ) {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if (!regex.test(champ.value)) {
        surligne(champ, true);
        return false;
    }
    else {
        surligne(champ, false);
        return true;
    }
}

function verifform(f) {
    var pseudoOk = verifname(f.name);
    var mailOk = verifemail(f.mail);

    if (pseudoOk && mailOk)
        return true;

    else {
        alert("Veuillez remplir correctement tous les champs");
        return false;
    }

}

