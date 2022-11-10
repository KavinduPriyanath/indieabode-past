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
let islogged = false;

const notloggedMenu = document.getElementById("not-logged");
const loggedMenu = document.getElementById("logged");

if (islogged) {
  notloggedMenu.style.display = "none";
  loggedMenu.style.display = "block";
} else {
  loggedMenu.style.display = "none";
  notloggedMenu.style.display = "block";
}
