//For the redactor box
//elements
const elements = document.querySelectorAll(".rbtn");

//events
elements.forEach((element) => {
  element.addEventListener("click", () => {
    let command = element.dataset["element"];

    if (command == "createLink" || command == "insertImage") {
      let url = prompt("Enter the link here: ", "https://");
      document.execCommand(command, false, url);
    } else {
      document.execCommand(command, false, null);
    }
  });
});

//storing values in redactor box
const redactorBox = document.getElementById("redactor");
const storeInput = document.getElementById("asset-details");

//storeInput.replaceWith(redactorBox);

//function to move data from innerhtml to input tag
document.getElementById("asset-submit").addEventListener("click", () => {
  let data = document.getElementById("redactor");
  let inputField = document.getElementById("asset-details");
  inputField.value = data.innerHTML;
});
