//JS for dropdown menus
document.addEventListener("mouseover", (e) => {
  const isDropdownButton = e.target.matches("[data-dropdown-button]");
  if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return;

  let currentDropdown;
  if (isDropdownButton) {
    currentDropdown = e.target.closest("[data-dropdown]");
    currentDropdown.classList.toggle("active");
  }

  document.querySelectorAll("[data-dropdown].active").forEach((dropdown) => {
    if (dropdown === currentDropdown) return;
    dropdown.classList.remove("active");
  });
});

//display user profile if logged
let islogged = true;

const notloggedMenu = document.getElementById("not-logged");
const loggedMenu = document.getElementById("logged");

if (islogged) {
  notloggedMenu.style.display = "none";
  loggedMenu.style.display = "block";
} else {
  loggedMenu.style.display = "none";
  notloggedMenu.style.display = "block";
}

//JS for opening and closing filters
window.addEventListener("load", () => {
  document.getElementById("side-menu").style.width = "0";
  document.getElementById("side-menu").style.transition = "none";
});

let sidemenuClosed = true;
function openSideMenu() {
  if (sidemenuClosed) {
    document.getElementById("side-menu").style.width = "250px";
    //document.getElementById("main").style.marginLeft = "400px";
    document.getElementById("filter-off").style.display = "none";
    document.getElementById("filter-on").style.display = "inline";
    document.getElementById("card-container").style.marginLeft = "450px";
    document.getElementById("topic-break").style.marginRight = "175px";
    document.getElementById("sort").style.marginRight = "175px";
    sidemenuClosed = false;
  } else {
    document.getElementById("side-menu").style.width = "0";
    // document.getElementById("main").style.marginLeft = "175px";
    document.getElementById("filter-on").style.display = "none";
    document.getElementById("filter-off").style.display = "inline";
    document.getElementById("card-container").style.marginLeft = "175px";
    document.getElementById("topic-break").style.marginRight = "150px";
    document.getElementById("sort").style.marginRight = "150px";
    sidemenuClosed = true;
  }
}
