
// ------------- Tomo la respuesta del capcha para saber que ocurrio
let recaptcha_response = "";
function submitUserForm() {
    if (recaptcha_response.length == 0) {
        document.getElementById("g-recaptcha-error").innerHTML =
            '<span style="color:red;">Este Campo es requerido.</span>';
        return false;
    }
    return true;
}

function verifyCaptcha(token) {
    const recaptcha_response = token;
    document.getElementById("g-recaptcha-error").innerHTML = recaptcha_response;
}