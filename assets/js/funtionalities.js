function popUpToggle(e) {
    e.preventDefault();
    var formPopup = document.getElementById("Formpopup");
    var contactanosButton = document.getElementsByClassName("more")[0];
    console.log(formPopup);
    formPopup.classList.toggle("active");
    contactanosButton.classList.toggle("d-none");
}
function popUpToggleProyect(e, proyect) {
    console.log(e);
    e.preventDefault();
    var formPopup = document.getElementById("Formpopup-" + proyect);
    formPopup.classList.toggle("active"); 
}