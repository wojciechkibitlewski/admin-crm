/// delete row
const leadsTable = document.getElementById("leadsTable");
let deleteRowButton = leadsTable.getElementsByTagName("button");
const inputID = document.getElementById("deleteRowModalId");

const buttonPressed = e => {
  //console.log(e.target.getAttribute('data-element'));
  inputID.setAttribute("value", e.target.getAttribute('data-element'));
}

for (let button of deleteRowButton) {
  button.addEventListener("click", buttonPressed);
}
