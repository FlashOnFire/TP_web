function OnOffAmpoule() {
    let ampoule = document.getElementById("ampoule");
    if (ampoule.src.match("bulbon")) {
        ampoule.src = "images/pic_bulboff.gif";
    } else {
        ampoule.src = "images/pic_bulbon.gif";
    }
}