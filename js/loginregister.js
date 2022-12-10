"use strict";
// validation
const email = document.getElementById("email");
const password = document.getElementById("password");
const name = document.getElementById("name");
const emailR = document.getElementById("emailR");
const passwordR = document.getElementById("passwordR");

const signinbtn = document.getElementById("signinL");
const signupbtn = document.getElementById("signupR");

const signup = document.querySelector(".signup");
const signin = document.querySelector(".signin");
const overlay = document.querySelector(".overlay");
signup.addEventListener("click", function () {
  overlay.style.transform = "translateX(-45vh)";
  overlay.style.transition = "all 1s";
});
signin.addEventListener("click", function () {
  overlay.style.transform = "translateX(0vh)";
  overlay.style.transition = "all 1s";
});
