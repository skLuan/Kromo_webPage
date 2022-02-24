import { form } from './components/staticForm.js';
import { form as popForm } from './components/popForm.js';


// Carga del formulario estatico
const formContainer = document.getElementById("staticFormContainer");
formContainer.append(form());

// Carga del formulario estatico
const popFormContainer = document.getElementById("popFormContainer");
popFormContainer.append(popForm());
// Tomamos el name del padre
const projectName = formContainer.getAttribute('name');
formContainer
  .querySelector("#cf-proyecto")
  .setAttribute(
    "value",
    projectName);

popFormContainer
  .querySelector("#cf-proyecto-pop")
  .setAttribute(
    "value",
    projectName);
console.log(formContainer.attributes);
console.log(projectName);
// formContainer.setAttribute()
