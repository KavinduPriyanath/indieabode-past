var x = document.getElementById("upload-game-form");
var y = document.getElementById("upload-asset-form");
var z = document.getElementById("btn");

function uploadAsset() {
  // x.style.left = "-1700px";
  // y.style.left = "5px";
  // z.style.left = "160px";
  window.location.href = "assetupload.php";
}

function uploadGame() {
  // x.style.left = "5px";
  // y.style.left = "1705px";
  // z.style.left = "0";
  window.location.href = "gameupload.php";
}

// function onFormSubmit() {
//   // event.preventDefault();

//   x.style.left = "-1700px";
//   y.style.left = "5px";
//   z.style.left = "160px";

//   // your Javascript code here
// }

function SayHi() {
  console.log("hel");
}
