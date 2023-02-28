"use strict";

// const menu = document.querySelector(".HamMenu");
// const btnMenu = document.querySelector(".btnMenu");

// btnMenu.addEventListener("click", function () {
//   if (menu.classList.contains("menu-drop")) {
//     menu.classList.remove("menu-drop");
//     menu.classList.add("active");
//     document.querySelector(".header").style.backgroundColor = "white";
//     f;
//   } else {
//     menu.classList.remove("active");
//     menu.classList.add("menu-drop");
//     document.querySelector(".header").style.backgroundColor = "transparent";
//   }
// });

const btnmenu = document.querySelector(".HamMenu");

const nav = document.querySelector(".nav-none");

btnmenu.addEventListener("click", function () {
  if (nav.classList.contains("nav-none")) {
    nav.classList.remove("nav-none");
    nav.classList.add("nav-active");
  } else if (nav.classList.contains("nav-active")) {
    nav.classList.remove("nav-active");
    nav.classList.add("nav-none");
  }
});
// // SlideShow
// const next = document.getElementById("next");
// const previous = document.getElementById("previous");

// const img = document.querySelector(".img");
// let x = 1;
// next.addEventListener("click", function () {
//   if (x < 5) {
//     x++;
//     img.setAttribute("src", +x + ".jpg");
//   } else {
//     x = 1;
//     img.setAttribute("src", +x + ".jpg");
//   }
// });
// previous.addEventListener("click", function () {
//   if (x >= 1) {
//     x--;
//     img.setAttribute("src", +x + ".jpg");
//   } else {
//     x = 5;
//     img.setAttribute("src", +x + ".jpg");
//     x--;
//   }
// });
// Scroll to menu
const menu = document.getElementById("menu");
// const pizzaC = document.getElementById("pizzaC");
menu.addEventListener("click", function (e) {
  e.preventDefault();
  console.log("Scroll");
  const href = this.getAttribute("src");
  href.scrollIntoView({ behavior: "smooth" });
});

//
const scrollup = document.querySelector(".scrollUp");
window.addEventListener("scroll", (event) => {
  let scroll = this.scrollY;
  // console.log(scroll);
  if (scroll > 900) {
    scrollup.style.display = "block";
  } else if (scroll < 900) {
    scrollup.style.display = "none";
  }
});

// cart
const shoppingCart = document.querySelector(".shopping-cart");

const cart = document.querySelector(".cart");

shoppingCart.addEventListener("click", (e) => {
  e.preventDefault();
  if (cart.classList.contains("cart")) {
    cart.classList.remove("cart");
    cart.classList.add("cart-active");
  } else if (cart.classList.contains("cart-active")) {
    cart.classList.remove("cart-active");
    cart.classList.add("cart");
  }
});
