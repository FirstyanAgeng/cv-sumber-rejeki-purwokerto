/*!
 * Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
 */
//
// Scripts
//
// window.addEventListener("DOMContentLoaded", (event) => {
//   const logoLight = document.getElementById("logo-light");
//   const logoDark = document.getElementById("logo-dark");
//   const navbarCollapsible = document.getElementById("mainNav");

//   // Navbar shrink function
//   const navbarShrink = function () {
//     if (!navbarCollapsible) {
//       return;
//     }
//     if (window.scrollY === 0) {
//       navbarCollapsible.classList.remove("navbar-shrink");
//       logoLight.style.display = "block";
//       logoDark.style.display = "none";
//     } else {
//       navbarCollapsible.classList.add("navbar-shrink");
//       logoLight.style.display = "none";
//       logoDark.style.display = "block";
//     }
//   };

//   // Shrink the navbar on scroll
//   window.addEventListener("scroll", navbarShrink);

//   // Shrink the navbar on page load (if necessary)
//   navbarShrink();
// });

// const navbarShrink = function () {
//   const navbarCollapsible = document.body.querySelector("#mainNav");
//   const isMobile = window.innerWidth <= 768; // Menentukan apakah tampilan adalah tampilan mobile

//   if (!navbarCollapsible) {
//     return;
//   }

//   if (window.scrollY === 0) {
//     navbarCollapsible.classList.remove("navbar-shrink");
//     logoLight.style.display = isMobile ? "none" : "block"; // Menyembunyikan logoLight pada tampilan mobile
//     logoDark.style.display = isMobile ? "block" : "none"; // Menampilkan logoDark pada tampilan mobile
//   } else {
//     navbarCollapsible.classList.add("navbar-shrink");
//     logoLight.style.display = "none";
//     logoDark.style.display = "block";
//     }
//   };

window.addEventListener("DOMContentLoaded", (event) => {
  const logoLight = document.getElementById("logo-light");
  const logoDark = document.getElementById("logo-dark");
  // Navbar shrink function
  const navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector("#mainNav");
    const isMobile = window.innerWidth <= 768; // Menentukan apakah tampilan adalah tampilan mobile

    if (!navbarCollapsible) {
      return;
    }

    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove("navbar-shrink");
      logoLight.style.display = isMobile ? "none" : "block"; // Menyembunyikan logoLight pada tampilan mobile
      logoDark.style.display = isMobile ? "block" : "none"; // Menampilkan logoDark pada tampilan mobile
    } else {
      navbarCollapsible.classList.add("navbar-shrink");
      logoLight.style.display = "none";
      logoDark.style.display = "block";
    }
  };

  //Shrink the navbar
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener("scroll", navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector("#mainNav");
  if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
      target: "#mainNav",
      rootMargin: "0px 0px -40%",
    });
  }

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector(".navbar-toggler");
  const responsiveNavItems = [].slice.call(
    document.querySelectorAll("#navbarResponsive .nav-link")
  );
  responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener("click", () => {
      if (window.getComputedStyle(navbarToggler).display !== "none") {
        navbarToggler.click();
      }
    });
  });

  // Activate SimpleLightbox plugin for portfolio items
  new SimpleLightbox({
    elements: "#portfolio a.portfolio-box",
  });
});

// go top js

const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  window.scrollY >= 500
    ? goTopBtn.classList.add("active")
    : goTopBtn.classList.remove("active");
});
