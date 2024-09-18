function writeText(txt) {
    document.getElementById("desc").innerHTML = txt;
}

function writeDefault(txt) {
    document.getElementById("desc").innerHTML = "Mouse over the sun and the planets and see the different descriptions.";
}

function changePic(pic) {
    document.getElementById("bigpic").src = pic;
}

function removePic() {
    document.getElementById("bigpic").src = "";
}