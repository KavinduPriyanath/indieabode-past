const terms = document.getElementById("checkbox");
const regBtn = document.getElementById("register");

function checkboxClicked() {
  if (terms.checked) {
    regBtn.style.backgroundColor = "#7FAFDB";
  } else {
    regBtn.style.backgroundColor = "#9eb7cf";
  }
}
