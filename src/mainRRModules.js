import { form } from "./components/staticForm.js";
import { form as popForm } from "./components/popForm.js";

try {
  // Carga del formulario estatico
  const formContainer = document.getElementById("staticFormContainer");

  // Carga del formulario estatico
  const popFormContainer = document.getElementById("popFormContainer");
  // Tomamos el name del padre
  const projectName = formContainer.getAttribute("name");

  if (projectName === "Guayacan") {
    formContainer.firstElementChild.setAttribute(
      "action",
      "include/zapierHook.php"
    );
  } else {
    console.log('something');
    formContainer.append(form());
    popFormContainer.append(popForm());
  }
  
  formContainer
    .querySelector("#cf-proyecto")
    .setAttribute("value", projectName);


  popFormContainer
    .querySelector("#cf-proyecto-pop")
    .setAttribute("value", projectName);
} catch (error) {
  console.error(
    "NO se encontraron formularios a los que agregar el contenedor"
  );
}
