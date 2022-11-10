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
  
  //For slideshow
  
  const buttons = document.querySelectorAll("[data-carousel-button]");
  
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1;
      const slides = button
        .closest("[data-carousel]")
        .querySelector("[data-slides]");
  
      const activeSlide = slides.querySelector("[data-active]");
      let newIndex = [...slides.children].indexOf(activeSlide) + offset;
      if (newIndex < 0) newIndex = slides.children.length - 1;
      if (newIndex >= slides.children.length) newIndex = 0;
  
      slides.children[newIndex].dataset.active = true;
      delete activeSlide.dataset.active;
    });
  });
  
  //Add review
  
  function AddReview() {
    document.getElementById("review-form").style.display = "block";
    document.getElementById("review-form").scrollIntoView();
  }
  