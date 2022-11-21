function validateName() {
    let name = document.getElementById("nameInput").value;
    let text;
    if (!name.match("^[A-Za-z]{1,20}")) {
        text = "Input not valid";
        document.getElementById("nameWarrning").innerHTML = text;
        return false;
    }
    else{
        text = "";
    }
    document.getElementById("nameWarrning").innerHTML = text;
    return true;

}

function validateSurename() {
    let surename = document.getElementById("surenameInput").value;
    let text;
    if (!surename.match("^[A-Za-z]{1,20}")) {
        text = "Input not valid";
        document.getElementById("nameWarrning").innerHTML = text;
        return false;
    }
    else{
        text = "";
    }
    document.getElementById("surenameWarrning").innerHTML = text;
    return true;

}

function validatePoints() {
    let points = document.getElementById("pointsInput").value;
    let text;
    if (isNaN(points) || points < 0) {
        document.write("Points must be number higher than zero!");
        text = "Input not valid";
        document.getElementById("nameWarrning").innerHTML = text;
        return false;
    }
    else{
        text = "";
    }
    document.getElementById("pointsWarrning").innerHTML = text;
    return true;

}

function validateNote() {
    let note = document.getElementById("noteInput").value;
    let text;
    if (!note.match("^[A-Za-z]{1,20}")) {
        text = "Input not valid";
        document.getElementById("nameWarrning").innerHTML = text;
        return false;
    }
    else{
        text = "";
    }
    document.getElementById("noteWarrning").innerHTML = text;
    return true;

}

function validateAll() {
    if( validateName() && validateSurename() && validatePoints() && validateNote()) {
        return true;
    }
    return false;
}