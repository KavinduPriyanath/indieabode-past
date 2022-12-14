const captcha = document.querySelector(".preview"),
  reloadBtn = document.querySelector(".captcha-refresh"),
  inputField = document.getElementById("captcha-input"),
  submitBtn = document.getElementById("submitBtn"),
  statusTxt = document.querySelector(".status-text");

//storing all captcha characters in array
let allCharacters = [
  "A",
  "B",
  "C",
  "D",
  "E",
  "F",
  "G",
  "H",
  "I",
  "J",
  "K",
  "L",
  "M",
  "N",
  "O",
  "P",
  "Q",
  "R",
  "S",
  "T",
  "U",
  "V",
  "W",
  "X",
  "Y",
  "Z",
  "a",
  "b",
  "c",
  "d",
  "e",
  "f",
  "g",
  "h",
  "i",
  "j",
  "k",
  "l",
  "m",
  "n",
  "o",
  "p",
  "q",
  "r",
  "s",
  "t",
  "u",
  "v",
  "w",
  "x",
  "y",
  "z",
  0,
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8,
  9,
];
function getCaptcha() {
  for (let i = 0; i < 6; i++) {
    //getting 6 random characters from the array
    let randomCharacter =
      allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener("click", () => {
  e.preventDefault();
  //checkbox.checked = "true";
  removeContent();
  getCaptcha();
});

submitBtn.addEventListener("click", (e) => {
  //e.preventDefault(); //preventing button from it's default behaviour
  //statusTxt.style.display = "block";
  //adding space after each character of user entered values because I've added spaces while generating captcha
  let inputVal = inputField.value.split("").join(" ");

  if (inputVal != captcha.innerText) {
    e.preventDefault();
    statusTxt.style.display = "block";
    statusTxt.style.color = "#ff0000";
    statusTxt.innerText = "Captcha not matched. Please try again!";
  }
});

function removeContent() {
  inputField.value = "";
  captcha.innerText = "";
  statusTxt.style.display = "none";
}

//viewing captcha
function checkboxClicked() {
  const checkbox = document.getElementById("robot");
  const captchaBox = document.getElementById("captcha");

  if (checkbox.checked) {
    console.log("ji");
    captchaBox.style.display = "block";
  } else {
    captchaBox.style.display = "none";
  }
}

//for error messages of login form
const errorDisplay = document.getElementById("errors");
//const error = document.getElementById("error-msg");

if (errorDisplay.innerHTML == "") {
  errorDisplay.style.display = "none";
  console.log("Error");
} else if (errorDisplay.innerHTML != "") {
  errorDisplay.style.display = "block";
  console.log("Error");
}
